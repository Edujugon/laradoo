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
 * This interface defines the minimum methods any documentor needs to implement.
 * @package Ripcord
 */
interface Ripcord_Documentor_Interface 
{
	public function setMethodData( $methods );
	public function handle( $rpcServer );
	public function getIntrospectionXML();
}

/**
 * This class implements the default documentor for the ripcord server. Any request to the server
 * without a request_xml is handled by the documentor.
 * @package Ripcord
 */
class Ripcord_Documentor implements Ripcord_Documentor_Interface
{
	/**
	 * The object to parse the docComments.
	 */
	private $docCommentParser = null;

	/**
	 * The name of the rpc server, used as the title and heading of the default HTML page.
	 */
	public $name     = 'Ripcord: Simple RPC Server';
	
	/**
	 * A url to an optional css file or a css string for an inline stylesheet.
	 */
	public $css      = "
		html {
			font-family: georgia, times, serif;
			font-size: 79%;
			background-color: #EEEEEE;
		}
		h1 {
			font-family: 'arial black', helvetica, sans-serif;
			font-size: 2em;
			font-weight: normal;
			margin: -20px -21px 0.4em -20px;
			padding: 40px 20px 20px;
			background: #01648E; /* for non-css3 browsers */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00486E', endColorstr='#09799E'); /* for IE */
			background: -webkit-gradient(linear, left top, left bottom, from(#00486E), to(#09799E)); /* for webkit browsers */
			background: -moz-linear-gradient(top,  #00486E,  #09799E); /* for firefox 3.6+ */
			color: white;
			border-bottom: 4px solid black;
			text-shadow: black 0.1em 0.1em 0.2em;
		}
		h2 {
			font-family: arial, helvetica, sans-serif;
			font-weight: bold;
			font-size: 1.4em;
			color: #444444;
			text-shadow: #AAAAAA 0.1em 0.1em 0.2em;
			margin-top: 2.5em;
			border-bottom: 1px solid #09799E;
		}
		h3 {
			font-family: arial, helvetica, sans-serif;
			font-weight: normal;
			font-size: 1.4em;
			color: #555555;
			text-shadow: #AAAAAA 0.1em 0.1em 0.2em;
			margin-bottom: 0px;
		}
		div.signature {
			font-family: courier, monospace;
			margin-bottom: 1.4em;
		}
		ul, ol, li {
			margin: 0px;
			padding: 0px;
		}
		ul, ol {
			color: #09799E;
			margin-bottom: 1.4em;
		}
		ul li {
			list-style: square;
		}
		ul li, ol li {
			margin-left: 20px;
		}
		li span, li label {
			color: black;		
		}
		li.param label {
			font-family: courier, monospace;
			padding-right: 1.4em;
		}
		a {
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
		body {
			background-color: white;
			width: 830px;
			margin: 10px auto;
			padding: 20px;
			-moz-box-shadow: 5px 5px 5px #ccc;
			-webkit-box-shadow: 5px 5px 5px #ccc;
			box-shadow: 5px 5px 5px #ccc;
		}
		code {
			display: block;
			background-color: #999999;
			padding: 10px;
			margin: 0.4em 0px 1.4em 0px;
			color: white;
			white-space: pre;
			font-family: courier, monospace;
			font-size: 1.2em;
		}
		.tag, .argName, .argType {
			margin-right: 10px;
		}
		.argument {
			margin-left: 20px;
		}
		.footer {
			font-family: helvetica, sans-serif;
			font-size: 0.9em;
			font-weight: normal;
			margin: 0px -21px -20px -20px;
			padding: 20px;
			background: #01648E; /* for non-css3 browsers */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00486E', endColorstr='#09799E'); /* for IE */
			background: -webkit-gradient(linear, left top, left bottom, from(#00486E), to(#09799E)); /* for webkit browsers */
			background: -moz-linear-gradient(top,  #00486E,  #09799E); /* for firefox 3.6+ */
			color: white;
		}
		.footer a {
			color: white;
			text-decoration: none;
		}
	";
	
	/**
	 * The wsdl 1.0 description.
	 */
	public $wsdl     = false;
	
	/**
	 * The wsdl 2.0 description
	 */
	public $wsdl2    = false;
	
	/**
	 * Which version of the XML vocabulary the server implements. Either 'xmlrpc', 'soap 1.1', 'simple' or 'auto'.
	 */
	public $version  = 'auto';
	
	/**
	 * The root URL of the rpc server.
	 */
	public $root     = '';

	/**
	 * Optional header text for the online documentation.
	 */
	public $header     = '';

	/**
	 * Optional footer text for the online documentation.
	 */
	public $footer     = '';	
	
	/**
	 * A list of method data, containing all the user supplied methods the rpc server implements.
	 */
	private $methods = null;
	
	/**
	 * The constructor for the Ripcord_Documentor class. 
	 * @param array $options. Optional. Allows you to set the public properties of this class upon construction.
	 */
	public function __construct( $options = null, $docCommentParser = null ) 
	{
		$check = array( 'name', 'css', 'wsdl', 'wsdl2', 'root', 'version', 'header', 'footer' );
		foreach ( $check as $name )
		{
			if ( isset($options[$name]) ) 
			{
				$this->{$name} = $options[$name];
			}
		}
		$this->docCommentParser = $docCommentParser;
	}

	/**
	 * This method fills the list of method data with all the user supplied methods of the rpc server.
	 * @param array $methodData A list of methods with name and callback information.
	 */
	public function setMethodData( $methodData )
	{
		$this->methods = $methodData;
	}

	/**
	 * This method handles any request which isn't a valid rpc request.
	 * @param object $rpcServer A reference to the active rpc server.
	 */
	public function handle( $rpcServer ) 
	{
		$methods = $rpcServer->call('system.listMethods');
		echo '<!DOCTYPE html>';
		echo '<html><head><title>' . $this->name . '</title>';
		if ( isset($this->css) ) 
		{
			if (strpos($this->css, "\n")!==false) {
				echo '<style type="text/css">'.$this->css.'</style>';
			} else {
				echo '<link rel="stylesheet" type="text/css" href="' . $this->css . '">';
			}
		}
		echo '</head><body>';
		echo '<div class="content">';
		echo '<h1>' . $this->name . '</h1>';
		echo $this->header;
		echo '<p>';
		$showWSDL = false;
		switch ( $this->version ) 
		{
			case 'xmlrpc':
				echo 'This server implements the <a href="http://www.xmlrpc.com/spec">XML-RPC specification</a>';
			break;
			case 'simple':
				echo 'This server implements the <a href="http://sites.google.com/a/simplerpc.org/simplerpc/Home/simplerpc-specification-v09">SimpleRPC 1.0 specification</a>';
			break;
			case 'auto';
				echo 'This server implements the <a href="http://www.w3.org/TR/2000/NOTE-SOAP-20000508/">SOAP 1.1</a>, <a href="http://www.xmlrpc.com/spec">XML-RPC</a> and <a href="http://sites.google.com/a/simplerpc.org/simplerpc/Home/simplerpc-specification-v09">SimpleRPC 1.0</a> specification.';
				$showWSDL = true;
			break;
			case 'soap 1.1':
				echo 'This server implements the <a href="http://www.w3.org/TR/2000/NOTE-SOAP-20000508/">SOAP 1.1 specification</a>.';
				$showWSDL = true;
			break;
		}
		echo '</p>';
		if ( $showWSDL && ( $this->wsdl || $this->wsdl2 ) ) 
		{
			echo '<ul>';
			if ($this->wsdl) 
			{
				echo '<li><a href="' . $this->root . '?wsdl">WSDL 1.1 Description</a></li>';
			}
			if ($this->wsdl2) 
			{
				echo '<li><a href="' . $this->root . '?wsdl2">WSDL 2.0 Description</a></li>';
			}					
			echo '</ul>';
		}

		$methods = $rpcServer->call( 'system.describeMethods' );
		$allMethods = array();
		$allFunctions = array();
		foreach( $methods['methodList'] as $index => $method ) 
		{
			if ( strpos( $method['name'], '.' ) !== false ) 
			{
				$allMethods[ $method['name'] ] = $index;
			} else {
				$allFunctions[ $method['name'] ] = $index;
			}
		}
		ksort( $allMethods );
		ksort( $allFunctions );
		$allMethods = $allFunctions + $allMethods;
		
		echo '<div class="index"><h2>Methods</h2><ul>';
		foreach ( $allMethods as $methodName => $methodIndex )
		{
			echo '<li><a href="#method_' . (int)$methodIndex . '">' . $methodName . '</a></li>';
		}
		echo '</ul></div>';
		
		$currentClass = '';
		$class = '';
		echo '<div class="functions">';
		foreach ( $allMethods as $methodName => $methodIndex ) 
		{
			$method = $methods['methodList'][$methodIndex];
			$pos = strpos( $methodName, '.');
			if ( $pos !== false ) 
			{
				$class = substr( $methodName, 0, $pos );
			}
			if ( $currentClass != $class ) 
			{
				echo '</div>';
				echo '<div class="class_'.$class.'">';
				$currentClass = $class;
			}
			echo '<h2 id="method_'.$methodIndex.'">' . $method['name'] . '</h2>';
			if ( isset( $method['signatures'] ) ) 
			{
				
				foreach ( $method['signatures'] as $signature ) 
				{
					echo '<div class="signature">';
					if ( is_array( $signature['returns'] ) ) {
						$return = $signature['returns'][0];
						echo '(' . $return['type'] . ') ';
					}
					echo $method['name'] . '(';
					$paramInfo = false;
					if ( is_array( $signature['params'] ) )
					{
						$paramInfo = $signature['params'];
						$params = '';
						foreach ( $signature['params'] as $param )
						{
							$params .= ', (' . $param['type'] . ') ' . $param['name'] . ' ';
						}
						echo substr($params, 1);
					}
					echo ')</div>';
					if ( is_array( $paramInfo ) )
					{
						echo '<div class="params"><h3>Parameters</h3><ul>';
						foreach ( $paramInfo as $param ) 
						{
							echo '<li class="param">';
							echo '<label>(' . $param['type'] . ') ' . $param['name'] . '</label> ';
							echo '<span>' . $param['description'] . '</span>';
							echo '</li>';
						}
						echo '</ul></div>';
					}
				}
				
			}	

			if ( $method['purpose'] )
			{
				echo '<div class="purpose">' . $method['purpose'] . '</div>';
			}
			
			if ( isset( $method['notes'] ) && is_array( $method['notes'] ) ) 
			{
				echo '<div class="notes"><h3>Notes</h3><ol>';
				foreach ( $method['notes'] as $note ) 
				{
					echo '<li><span>' . $note. '</span></li>';
				}
				echo '</ol></div>';
			}
			
			if ( isset( $method['see'] ) && is_array( $method['see'] ) ) 
			{
				echo '<div class="see">';
				echo '<h3>See</h3>';
				echo '<ul>';
				foreach ( $method['see'] as $link => $description) 
				{
					echo '<li>';
					if ( isset( $allMethods[$link] ) ) 
					{
						echo '<a href="#method_' . (int)$allMethods[$link] .'">' . $link . '</a> <span>' . $description . '</span>';
					} else {
						echo '<span>' . $link . ' ' . $description . '</span>';
					}
					echo '</li>';
				}
				echo '</ul></div>';
			}
			
		}
		echo '</div>';
		echo $this->footer;
		echo '<div class="footer">';
		echo 'Powered by <a href="http://ripcord.googlecode.com/">Ripcord : Simple RPC Server</a>.';
		echo '</div>';
		echo '</div></body></html>';
	}

	/**
	 * This method returns an XML document in the introspection format expected by 
	 * xmlrpc_server_register_introspection_callback. It uses the php Reflection 
	 * classes to gather information from the registered methods. 
	 * Descriptions are added from phpdoc docblocks if found.
	 * @return string XML string with the introspection data.
	 */
	function getIntrospectionXML() 
	{
		$xml = "<?xml version='1.0' ?><introspection version='1.0'><methodList>";
		if ( isset($this->methods) && is_array( $this->methods ) )
		{
			foreach ($this->methods as $method => $methodData )
			{
				if ( is_array( $methodData['call'] ) )
				{
					$reflection = new ReflectionMethod( 
						$methodData['call'][0], 
						$methodData['call'][1] 
					);
				}
				else
				{
					$reflection = new ReflectionFunction( $methodData['call'] );
				}
				$description = $reflection->getDocComment();
				if ( $description && $this->docCommentParser ) 
				{
					$data = $this->docCommentParser->parse( $description );
					if ($data['description']) 
					{
						$description = $data['description'];
					}
				}
				if ($description) 
				{
					$description = '<p>' . str_replace( array( "\r\n\r\n", "\n\n") , '</p><p>', $description) 
						. '</p>';
				}
				if ( is_array( $data ) ) 
				{
					foreach( $data as $key => $value ) 
					{
						switch( $key ) 
						{
							case 'category' :
							case 'deprecated' :
							case 'package' :
								$description .= '<div class="' . $key . '"><span class="tag">' 
									. $key . '</span>' . $value .'</div>';
							break;
							
							default :
							break;
						}
					}
				}
				$xml .= '<methodDescription name="' . $method . '"><purpose><![CDATA[' 
					. $description . ']]></purpose>';
				if ( is_array( $data ) && ( isset( $data['arguments'] ) || isset( $data['return'] ) ) ) 
				{
					$xml .= '<signatures><signature>';
					if ( isset( $data['arguments'] ) && is_array($data['arguments']) ) 
					{
						$xml .= '<params>';
						foreach ( $data['arguments'] as $name => $argument ) 
						{
							if ( $name[0] == '$' ) 
							{
								$name = substr( $name, 1 );
							}
							$xml .= '<value type="' . htmlspecialchars( $argument['type'] ) 
								. '" name="' . htmlspecialchars( $name ) . '"><![CDATA[' . $argument['description'] 
								. ']]></value>';
						}
						$xml .= '</params>';
					}
					if ( isset( $data['return'] ) && is_array( $data['return'] ) ) 
					{
						$xml .= '<returns><value type="' . htmlspecialchars($data['return']['type']) 
						. '"><![CDATA[' . $data['return']['description'] . ']]></value></returns>';
					}
					$xml .= '</signature></signatures>';
				}
				$xml .=  '</methodDescription>';
			}
		}	
		$xml .= "</methodList></introspection>";
		return $xml;
	}
}

/**
 * This interface describes the minimum interface needed for a comment parser object used by the
 * Ripcord_Documentor
 * @package Ripcord
 */
interface Ripcord_Documentor_Parser 
{
	/**
	 * This method parses a given docComment block and returns an array with information.
	 * @param string $commentBlock The docComment block.
	 * @return array The parsed information.
	 */
	public function parse( $commentBlock );
}

/**
 * This class implements the Ripcord_Documentor_Parser interface, parsing the docComment
 * as a phpdoc style docComment.
 * @package Ripcord
 */
class Ripcord_Documentor_Parser_phpdoc implements Ripcord_Documentor_Parser 
{
	
	/**
	 * This method parses a given docComment block and returns an array with information.
	 * @param string $commentBlock The docComment block.
	 * @return array The parsed information.
	 */
	public function parse( $commentBlock) 
	{
		$this->currentTag = 'description';
		$description = preg_replace('/^(\s*(\/\*\*|\*\/|\*))/m', '', $commentBlock);
		$info = array();
		$lines = explode( "\n", $description );
		foreach ( $lines as $line ) {
			$info = $this->parseLine( $line, $info );
		}
		return $info; //array( 'description' => $description );
	}
	
	/**
	 * This method parses a single line from the comment block.
	 */
	private function parseLine( $line, $info ) 
	{
		$handled = false;
		if (preg_match('/^\s*(@[a-z]+)\s(.*)$/i', $line, $matches)) 
		{
			$this->currentTag = substr($matches[1], 1);
			$line = trim( substr($line, strlen($this->currentTag)+2 ) );
			switch( $this->currentTag ) 
			{
				case 'param' :
					if ( preg_match('/^\s*([[:alpha:]|]+)\s([[:alnum:]$_]+)(.*)$/i', $line, $matches) ) 
					{
						if ( !isset($info['arguments']) ) {
							$info['arguments'] = array();
						}
						if ( !isset($info['arguments'][$matches[2]]) ) {
							$info['arguments'][$matches[2]] = array('description' => '');
						}
						$info['arguments'][$matches[2]]['type'] = $matches[1];
						$info['arguments'][$matches[2]]['description'] .= $this->parseDescription($matches[3]);
					}
					$handled = true;
				break;
				case 'return' :
					if ( preg_match('/^\s*([[:alpha:]|]+)\s(.*)$/i', $line, $matches) ) 
					{
						if ( !isset($info['return']) ) {
							$info['return'] = array( 'description' => '' );
						}
						$info['return']['type'] = $matches[1];
						$info['return']['description'] .= $this->parseDescription($matches[2]);
					}
					$handled = true;
				break;
			}
		}
		if (!$handled) {
			switch( $this->currentTag) {
				case 'param' :
				case 'return' :
					if ( !isset( $info[$this->currentTag] ) ) {
						$info[$this->currentTag] = array();
					}
					$info[$this->currentTag]['description'] .= $this->parseDescription($line);
				break;
				default:
					if ( !isset( $info[$this->currentTag] ) ) {
						$info[$this->currentTag] = '';
					}
					$info[$this->currentTag] .= $this->parseDescription($line);
				break;
			}
		}
		return $info;
	}
	
	/**
	 * This method parses only the text description part of a line of the comment block.
	 */
	private function parseDescription( $line ) {
		while ( preg_match('/{@([^}]*)}/', $line, $matches) ) {
			switch( $matches[1] ) {
				case 'internal' : 
					$line = str_replace( $matches[0], '', $line );
				break;
				default :
					$line = str_replace( $matches[0], $matches[1], $line );
				break;
			}
		}
		$line = str_replace( array( '\@', '{@*}' ), array( '@', '*/' ), $line );
		return $line;
	}
}

?>