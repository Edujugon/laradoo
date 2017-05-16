<?php
/**
 * Project: Laradoo.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 10/5/17
 * Time: 16:04
 */

namespace Edujugon\Laradoo;

use Edujugon\Laradoo\Exceptions\OdooException;
use Illuminate\Support\Collection;
use ripcord;

/**
 * Odoo Class
 * Used to connect with the odoo.com ERP.
 *
 */
class Odoo
{

    /**
     * RipCord Class - XML-RPC library for PHP - https://github.com/poef/ripcord
     * @var string
     */
    protected $ripcord;

    /**
     * Common client
     * @var
     */
    public $common;
    /**
     * Object client
     * @var
     */
    public $object;

    /**
     * User identifier used in authenticated calls instead of the login.
     */
    protected $uid;


    protected $db;
    protected $host;
    protected $username;
    protected $password;

    /**
     * API host suffix
     */
    protected $suffix = '/xmlrpc/';
    /**
     * END API host suffix
     */

    /**
     * EndPoints.
     */
    protected $commonEndPoint = 'common'; // meta-calls which don't require authentication
    protected $objectEndPoint = 'object'; // call methods of odoo models
    /**
     * END API Entry Points.
     */


    /**
     * Query parameters
     */

    //Condition for the query.
    protected $condition = [
        'default' => [[]],
        'value' => [[]]
    ];

    //offset and limit parameters are available to only retrieve a subset of all matched records
    protected $offset = [
        'default' => 0,
        'value' => 0
    ];
    protected $limit = [
        'default' => null,
        'value' => null
    ];

    // fields to be requested.
    protected $fields = [
        'default' => [],
        'value' => []
    ];


    function __construct()
    {
        // Set Ripcord Instance
        $this->ripcord = ripcord::class;

        //Load config data
        $config = eConfig();

        //Set config data
        $this->suffix = array_key_exists('api-suffix', $config) ? eAddCharacter($config['api-suffix'], '/') : $this->suffix;
        $this->host = array_key_exists('host', $config) ? $config['host'] : $this->host;
        $this->db = array_key_exists('db', $config) ? $config['db'] : $this->db;
        $this->username = array_key_exists('username', $config) ? $config['username'] : $this->username;
        $this->password = array_key_exists('password', $config) ? $config['password'] : $this->password;

    }

    /**
     * **********
     * API LIST
     * **********
     */

    /**
     * Connect with Odoo.
     * Set the uid
     *
     * @param null $db
     * @param null $username
     * @param null $password
     * @param array $array
     * @return $this
     * @throws OdooException
     */
    public function connect($db = null, $username = null, $password = null, array $array = [])
    {

        $db = $db ?: $this->db;
        $username = $username ?: $this->username;
        $password = $password ?: $this->password;

        $this->auth($db, $username, $password, $array);

        return $this;
    }


    /**
     * Check access rights on a model.
     *
     * @param string $permission ('read','write','create','unlink')
     * @param string $model
     * @param bool $withExceptions
     * @return mixed array|bool
     */
    public function can($permission, $model, $withExceptions = false)
    {
        if (!is_array($permission))
            $permission = [$permission];

        $can = collect($this->object->execute_kw($this->db, $this->uid, $this->password,
            $model, 'check_access_rights',
            $permission, array('raise_exception' => $withExceptions)));

        return $this->makeResponse($can, 0);
    }


    /**
     * Set condition for search query/method
     *
     * @param string $field
     * @param string $operator
     * @param $value
     * @return $this
     */
    public function where($field,$operator, $value = null)
    {
        if (func_num_args() === 2) {
            $new = [$field, '=', $operator];
        } else
            $new = func_get_args();

        if (empty($this->condition['value']))
            $this->condition['value'] = $this->odooArrayFormat($new);
        else
            $this->condition['value'][0][] = $new;

        return $this;
    }


    /**
     * Set limit for your query.
     * Also can pass offset to start from that value.
     *
     * @param int $limit
     * @param int $offset
     * @return Odoo $this
     */
    public function limit($limit,$offset = 0)
    {
        $this->limit['value'] = $limit;
        $this->offset['value'] = $offset;

        return $this;
    }

    /**
     * Set fields to be retrieved.
     *
     * @param $fields
     * @return $this
     */
    public function fields($fields)
    {
        $fields = is_array($fields) ? $fields : func_get_args();

        $this->fields['value'] = $fields;

        return $this;
    }

    /**
     * By default, retrieve the ids based on a previous passed condition.
     * If no condition, all are retrieved.
     *
     * @param string $model Model name
     * @return \Illuminate\Support\Collection List of ids.
     * @throws OdooException
     */
    public function search($model)
    {
        $method = 'search';

        $this->validate($method, $model);

        $condition = $this->condition['value'];

        $params = $this->buildParams('limit', 'offset');

        $result = $this->call($model, $method, $condition, $params);

        //Reset params for future queries.
        $this->resetParams('limit', 'offset', 'condition');

        return $this->makeResponse($result);
    }


    /**
     * Count the items in a model based on the condition.
     * If no condition, count all.
     *
     * @param $model
     * @return integer
     * @throws OdooException
     */
    public function count($model)
    {
        $method = 'search_count';

        $this->validate($method, $model);

        $condition = $this->condition['value'];

        $result = $this->call($model, $method, $condition);

        //Reset params for future queries.
        $this->resetParams('condition');

        return $this->makeResponse($result, 0);

    }

    /**
     * Retrieve model's data
     *
     * @param string $model
     * @return \Illuminate\Support\Collection
     */
    public function get($model)
    {
        $method = 'read';

        $this->validate($method, $model);

        $ids = $this->search($model)->toArray();

        $params = $this->buildParams('fields');

        $result = $this->call($model, $method, [$ids], $params);

        //Reset params for future queries.
        $this->resetParams('fields');

        return $this->makeResponse($result);
    }


    /**
     * Retrieve the Odoo version.
     * No need authentication
     * @return Collection
     */
    public function version()
    {
        $urlCommon = $this->setApiEndPoint($this->commonEndPoint);

        $version = collect($this->getClient($urlCommon)->version());

        return $this->makeResponse($version);
    }

    /**
     * Retrieve all model structure fields.
     *
     * @param $model
     * @param array $attributes
     * @return Collection
     */
    public function fieldsOf($model, $attributes = [])
    {
        $method = 'fields_get';

        $this->validate($method, $model);

        $result = $this->call($model, $method, [], $attributes);


        return $this->makeResponse($result);
    }

    /**
     * Create a single record and return its database identifier.
     *
     * @param $model
     * @param array $data
     * @return Collection
     */
    public function create($model, array $data)
    {
        $method = 'create';

        $this->validate($method, $model);

        $result = $this->call($model, $method, [$data]);


        return $this->makeResponse($result, 0);
    }

    /**
     * Remove a record by Id or Ids.
     *
     * @param $model
     * @param integer|array $ids
     * @return Collection|bool
     */
    public function deleteById($model, $ids)
    {
        $ids = is_array($ids) ? $ids : [$ids];

        $method = 'unlink';

        $this->validate($method, $model);

        $result = $this->call($model, $method, $ids);

        return $this->makeResponse($result, 0);
    }

    /**
     * Remove record/records based on conditions.
     *
     * @param $model
     * @return bool|Collection|string
     * @throws OdooException
     */
    public function delete($model)
    {
        // Get ids.
        $ids = $this->search($model);

        if ($ids->isEmpty())
            return "There isn't any record based on your condition";

        $method = 'unlink';

        $this->validate($method, $model);

        $result = $this->call($model, $method, $ids->count() > 1 ? [$ids->toArray()] : $ids->toArray());

        return $this->makeResponse($result, 0);
    }

    /**
     * Run Client execute_kw call with provided params.
     *
     * @param $params
     * @return Collection
     */
    function call($params)
    {
        $args = array_merge(
            [$this->db, $this->uid, $this->password],
            func_get_args()
        );

        return collect(call_user_func_array([$this->object, 'execute_kw'], $args));
    }


    /**
     * **********
     * END API LIST
     * **********
     */


    /**
     * ****************
     * SETTERS
     * ****************
     */

    /**
     * Set url property
     *
     * @param string $url Odoo API entry point.
     * @return Odoo $this
     */
    function host($url)
    {
        $this->host = $url;

        return $this;
    }

    /**
     * Set the username
     *
     * @param string $username
     * @return Odoo $this
     */
    function username($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set the password.
     *
     * @param $password
     * @return Odoo $this
     */
    function password($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the db name.
     *
     * @param string $name
     * @return Odoo $this
     */
    function db($name)
    {
        $this->db = $name;

        return $this;
    }

    /**
     * Set the API suffix.
     *
     * @param $name
     * @return $this
     */
    function apiSuffix($name)
    {
        $this->suffix = $name;

        return $this;
    }

    /**
     * ****************
     * END SETTERS
     * ****************
     */

    /**
     * ****************
     * GETTERS
     * ****************
     */

    /**
     * Get ripcord property
     *
     * @return string
     */
    function getRipcord()
    {
        return $this->ripcord;
    }

    /**
     * Get the user identifier used in authenticated
     *
     * @return mixed
     */
    function getUid()
    {
        return $this->uid;
    }

    /**
     * Get host
     *
     * @return string
     */
    function getHost()
    {
        return $this->host;
    }

    /**
     * Get db
     *
     * @return string
     */
    function getDb()
    {
        return $this->db;
    }

    /**
     * Get username
     * @return mixed
     */
    function getUserName()
    {
        return $this->username;
    }

    /**
     * Get password
     * @return mixed
     */
    function getPassword()
    {
        return $this->password;
    }


    /**
     * ****************
     * END GETTERS
     * ****************
     */

    /**
     * ****************
     * PRIVATE METHODS
     * ****************
     */

    /**
     * Authenticate into Odoo ERP.
     *
     * @param $db
     * @param $username
     * @param $password
     * @param array $array
     * @throws OdooException
     */
    private function auth($db, $username, $password, array $array = [])
    {
        //Prepare urls for different clients
        $urlCommon = $this->setApiEndPoint($this->commonEndPoint);
        $urlActions = $this->setApiEndPoint($this->objectEndPoint);

        //Assign clients by type
        $this->common = $this->getClient($urlCommon);
        $this->object = $this->getClient($urlActions);

        $this->uid = $this->common->authenticate($db, $username, $password, $array);

        if (!is_int($this->uid)) {
            if (is_array($this->uid) && array_key_exists('faultCode', $this->uid))
                throw new OdooException($this->uid['faultCode']);
            else
                throw new OdooException('Unsuccessful Authorization');
        }

    }


    /**
     * Set the Full API endpoint
     *
     * @param string $endPoint
     * @return string
     * @throws OdooException OdooException
     */
    private function setApiEndPoint($endPoint)
    {
        if (empty($this->host))
            throw new OdooException('You must provide the odoo host by host setter method');

        return $this->host . $this->suffix . $endPoint;

    }


    /**
     * Create an understandable array for Odoo.
     *
     * @param array $list
     * @return array
     */
    private function odooArrayFormat(array $list)
    {
        $array = [];

        foreach ($list as $item) {

            $array[0][0][] = $item;
        }
        return $array;
    }

    /**
     * Reset extra data to base values
     *
     * @param $params
     */
    private function resetParams($params)
    {
        $keys = is_array($params) ? $params : func_get_args();

        foreach ($keys as $key) {
            if (property_exists($this, $key))
                $this->$key['value'] = $this->$key['default'];
        }
    }

    /**
     * Create an array based on the passed keys.
     * Those keys are properties of this class.
     *
     * @param $params
     * @return array
     * @internal param $keys
     */
    private function buildParams($params)
    {
        $keys = is_array($params) ? $params : func_get_args();

        $array = [];

        foreach ($keys as $key) {
            if (property_exists($this, $key))
                $array = array_merge($array, [$key => $this->$key['value']]);
        }

        return $array;
    }

    /**
     * Create XML-RPC client
     *
     * @param $endPoint
     * @return \Ripcord_Client
     */
    private function getClient($endPoint)
    {
        return ripcord::client($endPoint);
    }

    /**
     * Validate permission.
     *
     * @param $method
     * @param $model
     * @throws OdooException
     */
    private function validate($method, $model)
    {
        if (!$this->can($method, $model))
            throw new OdooException("You don't have '$method' permission in '$model'");
    }

    /**
     * Prepare the api response.
     * If there is a faultCode then return its value.
     * If key passed, returns the value of that key.
     * Otherwise return the provided data.
     *
     * @param Collection $result
     * @param string $key
     * @return mixed
     */
    private function makeResponse($result, $key = null)
    {
        if (array_key_exists('faultCode', $result->toArray()))
            return $result['faultCode'];

        if (!is_null($key) && array_key_exists($key, $result->toArray()))
            return $result->get($key);

        return $result;
    }
}