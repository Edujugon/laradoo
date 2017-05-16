<?php
/**
 * Ripcord is an easy to use XML-RPC library for PHP. 
 * @package Ripcord
 * @author Auke van Slooten <auke@muze.nl>
 * @copyright Copyright (C) 2010, Muze <www.muze.nl>
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License
 * @version Ripcord 0.9 - PHP 5
 */

/**
 * The ripcord class contains a number of useful static methods. This makes it a bit easier to create a server or client, convert types 
 * and check for errors.
 * @package Ripcord
 */
class ripcord
{
	/**
	 *  This method checks whether the given argument is an XML-RPC fault.
	 *  @param mixed $fault
	 *  @return bool
	 */
	public static function isFault($fault) 
	{
		if ( isset($fault) && is_array($fault) ) {
			return xmlrpc_is_fault($fault);
		} else {
			return false;
		}
	}

	/**
	 *  This method generates an XML-RPC fault with the given code and message.
	 *  @param int $code
	 *  @param string $message
	 *  @return array
	 */
	public static function fault($code, $message) 
	{
		return array('faultCode' => $code, 'faultString' => $message);
	}
	
	/**
	 * This method returns a new Ripcord server, which by default implements XML-RPC, Simple RPC and SOAP 1.1.
	 * The server will publish any methods passed through the $services argument. It can be configured through
	 * the $options argument.
	 * @param mixed $services Optional. Either an object or an array of objects. If the array has non-numeric keys, the key will be used as a namespace for the methods in the object.
	 * @param array $options Optional. An array of options to set for the Ripcord server. 
	 * @see Ripcord_Server
	 */
	public static function server($services = null, $options = null, $documentor = null) 
	{
		self::load('Ripcord_Server');
		if ( !isset($documentor) )
		{
			$doc = array('name', 'css', 'wsdl', 'wsdl2');
			$docOptions = array();
			foreach ( $doc as $key ) 
			{
				if ( isset($options[$key]) ) 
				{
					$docOptions[$key] = $options[$key];
					unset( $options[$key] );
				}
			}
			$docOptions['version'] = $options['version'];
			$documentor = self::documentor( $docOptions );
		}
		return new Ripcord_Server($services, $options, $documentor);
	}
	
	/**
	 * This method returns a new Ripcord client. By default this will be an XML-RPC client, but you can change this
	 * through the $options argument. 
	 * @param string $url The url of the RPC server to connect with
	 * @param array $options Optional. An array of options to set for the Ripcord client.
	 * @see Ripcord_Client
	 */
	public static function client($url, $options = null, $transport = null ) 
	{
		self::load('Ripcord_Client');
		if ( !isset($transport) ) 
		{
			$transport = new Ripcord_Transport_Stream();
		}
		return new Ripcord_Client($url, $options, $transport);
	}
	
	/**
	 * This method returns a new Ripcord documentor object.
	 * @param array $options Optional. An array of options to set for the Ripcord documentor.
	 * @param object docCommentParser Optional. An object that parses a docComment block. Must
	 * implement the Ripcord_Documentor_CommentParser interface.
	 * @see Ripcord_Client
	 */
	public static function documentor( $options = null, $docCommentParser = null ) 
	{
		self::load('Ripcord_Documentor');
		if (!$docCommentParser) {
			$docCommentParser = new Ripcord_Documentor_Parser_phpdoc();
		}
		return new Ripcord_Documentor( $options, $docCommentParser );
	}
	
	/**
	 * This method returns an XML-RPC datetime object from a given unix timestamp.
	 * @param int $timestamp
	 * @return object
	 */
	public static function datetime($timestamp) 
	{
		$datetime = date("Ymd\TH:i:s", $timestamp);
		xmlrpc_set_type($datetime, 'datetime');
		return $datetime;
	}

	/**
	 * This method returns a unix timestamp from a given XML-RPC datetime object.
	 * It will throw a 'Variable is not of type datetime' Ripcord_Exception (code -6)
	 * if the given argument is not of the correct type.
	 * @param object $datetime
	 * @return int
	 */
	public static function timestamp($datetime) 
	{
		if (xmlrpc_get_type($datetime)=='datetime') 
		{
			return $datetime->timestamp;
		} else {
			throw Ripcord_Exception('Variable is not of type datetime', -6);
		}
	}
	
	/**
	 * This method returns an XML-RPC base64 object from a given binary string.
	 * @param string $binary
	 * @return object
	 */
	public static function base64($binary) 
	{
		xmlrpc_set_type($binary, 'base64');
		return $binary;
	}
	
	/**
	 * This method returns a (binary) string from a given XML-RPC base64 object.
	 * It will throw a 'Variable is not of type base64' Ripcord_Exception (code -7)
	 * if the given argument is not of the correct type.
	 * @param object $base64
	 * @return string
	 */
	public static function binary($base64) 
	{
		if (xmlrpc_get_type($base64)=='base64')
		{
			return $base64->scalar;
		} else {
			throw Ripcord_Exception('Variable is not of type base64', -7);
		}
	}
	
	/**
	 * This method returns the type of the given parameter. This can be any of the XML-RPC data types, e.g.
	 * 'struct', 'int', 'string', 'base64', 'boolean', 'double', 'array' or 'datetime'. 
	 * @param mixed $param
	 * @return string
	 */
	public static function getType($param) 
	{
		return xmlrpc_get_type($param);
	}

	/**
	 * This method returns a new Ripcord client, configured to access a SOAP 1.1 server.
	 * @param string $url 
	 * @param array $options Optional.
	 * @see Ripcord_Client
	 */
	public static function soapClient($url, $options = null, $transport = null) 
	{
		$options['version'] = 'soap 1.1';
		return self::client($url, $options, $transport);
	}
	
	/**
	 * This method returns a new Ripcord client, configured to access an XML-RPC server.
	 * @param string $url 
	 * @param array $options Optional.
	 * @return object
	 * @see Ripcord_Client
	 */
	public static function xmlrpcClient($url, $options = null, $transport = null) 
	{
		$options['version'] = 'xmlrpc';
		return self::client($url, $options, $transport);
	}
	
	/**
	 * This method returns a new Ripcord client, configured to access a Simple RPC server.
	 * @param string $url 
	 * @param array $options Optional.
	 * @return object
	 * @see Ripcord_Client
	 */
	public static function simpleClient($url, $options = null, $transport = null) 
	{
		$options['version'] = 'simple';
		return self::client($url, $options, $transport);
	}

	/**
	 * This method includes a ripcord class, using require_once. Used for autoloading ripcord classes.
	 * @param string $class The name of the class to load.
	 * @return boolean
	 */
	public static function load($class) 
	{
		if (substr($class, 0, 8)=='Ripcord_') 
		{
			$root = dirname(__FILE__).'/ripcord_';
			$class = substr($class, 8);
			$file = str_replace('.', '', $class);
			$file = str_replace('_', '/', $file);
			$file = strtolower($file);
			while ($file && $file!='.') 
			{
				if ( file_exists($root.$file.'.php') ) 
				{
					require_once($root.$file.'.php');
					return true;
				} else {
					$file = dirname($file);
				}
			}
		}
		return false;
	}
	
	/**
	 * This method creates a new Ripcord_Client_Call object, which encodes the information needed for
	 * a method call to an rpc server. This is mostly used for the system.multiCall method.
	 * @param string $method The name of the method call to encode
	 * @param mixed $args,... The remainder of the arguments are encoded as parameters to the call
	 * @return object
	 */
	public static function encodeCall() 
	{
		self::load('Ripcord_Client');
		$params = func_get_args();
		$method = array_shift($params);
		return new Ripcord_Client_Call( $method, $params );
	}
	
	/* 
	 * This method binds the first parameter to the output of a Ripcord client call. If
	 * the second argument is a Ripcord_Client_Call object, it binds the parameter to it,
	 * if not it simply assigns the second parameter to the first parameter.
	 * This means that doing: 
	 * > ripcord::bind( $result, $client->someMethod() )
	 * will always result in $result eventually containing the return value of $client->someMethod().
	 * Whether multiCall mode has been enabled or not.
	 */
	public function bind(&$bound, $call) 
	{
		if ( is_a( $call, 'Ripcord_Client_Call' ) ) 
		{
			$call->bound =& $bound;
		} else {
			$bound = $call;
		}
		return null;
	}
	
	/**
	 * Method {method} not found. - Thrown by the ripcord server when a requested method isn't found.
	 */
	const methodNotFound     = -1;
	/**
	 * Argument {index} is not a valid Ripcord call - Thrown by the client when passing incorrect arguments to system.multiCall.
	 */
	const notRipcordCall     = -2;
	/**
	 * Cannot recurse system.multiCall  - Thrown by the ripcord server when system.multicall is called within itself.
	 */
	const cannotRecurse      = -3;
	/**
	 * Could not access {url} - Thrown by the transport object when unable to access the given url.
	 */
	const cannotAccessURL    = -4;
	/**
	 * PHP XMLRPC library is not installed - Thrown by the ripcord server and client when the xmlrpc library is not installed.
	 */
	const xmlrpcNotInstalled = -5;
	/**
	 * Variable is not of type datetime - Thrown by the ripcord timestamp method.
 	 */
	const notDatetime        = -6;
	/**
	 * Variable is not of type base64 - Thrown by the ripcord binary method.
 	 */
	const notBase64          = -7;
	/**
	 * Variable is not a classname or an object - Thrown by the ripcord server.
	 */
	const unknownServiceType = -8;
}

/**
 * This interface is implemented by all exceptions thrown by Ripcord.
 * @package Ripcord
 */
interface Ripcord_Exception {}

/**
 * This class is used whenever an when a method passed to the server is invalid.
 * - ripcord::methodNotFound (-1) Method {method} not found. - Thrown by the ripcord server when a requested method isn't found.
 * @package Ripcord
 */
class Ripcord_BadMethodCallException extends BadMethodCallException implements Ripcord_Exception { }
 
/**
 * This class is used whenever prerequisite requirements are not met.
 * - ripcord::xmlrpcNotInstalled (-5) PHP XMLRPC library is not installed - Thrown by the ripcord server and client when the xmlrpc library is not installed.
 * @package Ripcord
 */
class Ripcord_ConfigurationException extends Exception implements Ripcord_Exception { }

/**
 * This class is used whenever an argument passed to a Ripcord method is invalid for any reason. Possible exceptions thrown are:
 * - ripcord::notRipcordCall (-2) Argument {index} is not a valid Ripcord call - Thrown by the client when passing incorrect arguments to system.multiCall.
 * - ripcord::cannotRecurse (-3) Cannot recurse system.multiCall  - Thrown by the ripcord server when system.multicall is called within itself.
 * - ripcord::notDateTime (-6) Variable is not of type datetime - Thrown by the ripcord timestamp method.
 * - ripcord::notBase64 (-7) Variable is not of type base64 - Thrown by the ripcord binary method.
 * - ripcord::unknownServiceType (-8) Variable is not a classname or an object - Thrown by the ripcord server.
 * @package Ripcord
 */
class Ripcord_InvalidArgumentException extends InvalidArgumentException implements Ripcord_Exception { }

/**
 * This class is used whenever something goes wrong in sending / receiving data. Possible exceptions thrown are:
 * - ripcord::cannotAccessURL (-4) Could not access {url} - Thrown by the transport object when unable to access the given url.
 * @package Ripcord
 */
class Ripcord_TransportException extends RuntimeException implements Ripcord_Exception { }

/**
 * This class is used for exceptions generated from xmlrpc faults returned by the server. The code and message correspond
 * to the code and message from the xmlrpc fault.
 * @package Ripcord
 */
class Ripcord_RemoteException extends Exception implements Ripcord_Exception { }

if (function_exists('spl_autoload_register')) {
	spl_autoload_register('ripcord::load');
}
?>