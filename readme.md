# Laradoo

<img src="https://raw.githubusercontent.com/Edujugon/laradoo/master/docs/assets/laradoo.png">

Odoo ERP API for Laravel. [Odoo website](https://www.odoo.com)

[![Build Status](https://api.travis-ci.org/Edujugon/laradoo.svg)](https://api.travis-ci.org/Edujugon/laradoo)
[![Total Downloads](https://poser.pugx.org/edujugon/laradoo/downloads)](https://packagist.org/packages/edujugon/laradoo)
[![Latest Stable Version](https://poser.pugx.org/edujugon/laradoo/v/stable)](https://packagist.org/packages/edujugon/laradoo)
[![License](https://poser.pugx.org/edujugon/laradoo/license)](https://packagist.org/packages/edujugon/laradoo)


## Installation

type in console:

```
composer require edujugon/laradoo
```

Register Laradoo service by adding it to the providers array.
```
'providers' => array(
        ...
        Edujugon\Laradoo\Providers\OdooServiceProvider::class
    )
```

Let's add the Alias facade, add it to the aliases array.
```
'aliases' => array(
        ...
        'Odoo' => Edujugon\Laradoo\Facades\Odoo::class,
    )
```
    
Publish the package's configuration file to the application's own config directory

```
php artisan vendor:publish --provider="Edujugon\Laradoo\Providers\OdooServiceProvider" --tag="config"
```

### Configuration

After publishing the package config file, the base configuration for laradoo package is located in config/laradoo.php


Also, you can dynamically update those values calling the available setter methods:

`host($url)`, `username($username)`, `password($password)`, `db($name)`, `apiSuffix($name)`


##  Usage samples

Instance the main Odoo class:

```
$odoo = new \Edujugon\Laradoo\Odoo();
```
You can get the Odoo API version just calling the version method:

```
$version = $odoo->version();
```
> This methods doesn't require to be connected/Logged into the ERP.

Connect and log into the ERP:

```
$odoo = $odoo->connect();
```

All needed configuration data is taken from `laradoo.php` config file. But you always may pass new values on the fly if required.

```
$this->odoo = $this->odoo
            ->username('my-user-name')
            ->password('my-password)
            ->db('my-db')
            ->host('my-host.com')
            ->connect();
```


After login, you can check the user identifier like follows:

```
$userId= $this->odoo->getUid();
```

You always can check the permission on a specific model:

```
$can = $odoo->can('read', 'res.partner');
```
> Permissions which can be checked: 'read','write','create','unlink'

Method `search provides a collection of ids based on your conditions:

```
$ids = $odoo->where('customer', '=', true)
            ->search('res.partner');
```

You can limit the amount of data using `limit` method and use as many as condition you need:

```
$ids = $odoo->where('is_company', true)
            ->where('customer', '=', true)
            ->limit(3)
            ->search('res.partner');
```

If need to get a list of models, use the `get` method:

```
$models = $odoo->where('customer', true)
                ->limit(3)
                ->get('res.partner');
```

Instead of retrieving all properties of the models, you can reduce it by adding `fields` method before the method `get`

```
$models = $odoo->where('customer', true)
                ->limit(3)
                ->fields('name')
                ->get('res.partner');
```

If not sure about what fields a model has, you can retrieve the model structure data by calling `fieldsOf` method:

```
$structure = $odoo->fieldsOf('res.partner');
```

Till now we have only retrieved data from the ERP but you can also Create and Delete records.

In order to create a new record just call `create` method as follows:

```
$id = $odoo->create('res.partner',['name' => 'Jonh Odoo']);
```
> The method returns the id of the new record.

For Deleting records we have the `delete` method:

```
$result = $odoo->where('name', 'Jonh Odoo')
            ->delete('res.partner');
```
> Notice that before calling `delete` method you have to use `where`.

You can also remove records by ids like follows:

```
$result = $odoo->deleteById('res.partner',$ids);
```

Update any record of your ERP:

```
$updated = $odoo->where('name', 'John Odoo')
            ->update('res.partner',['name' => 'John Odoo Odoo','email' => 'Johndoe@odoo.com']);
```

Notice that all `delete` and `update` methods always returns `true` except if there was an error.

`call` method is also available for those who want to set a custom API call:

```
$odoo->call('res.partner', 'search',[
        [
            ['is_company', '=', true],
            ['customer', '=', true]
        ]
    ],[
        'offset'=>1,
        'limit'=>5
    ]);
```

##  [Full API list](https://edujugon.github.io/laradoo/build/master/Edujugon/Laradoo/Odoo.html)
