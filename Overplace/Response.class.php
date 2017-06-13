<?php

namespace Overplace;

/**
 * Class Response.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Response
 * @namespace   Overplace
 * @package     Overplace
 * @uses        \ReflectionClass
 *
 * Date:        19/04/2017
 */
class Response
{

	/**
	 * Array with mapped relation between Response object.
	 * @access  protected
	 * @var     array
	 */
	protected $_map;

	/**
	 * String message for response.
	 * @access  protected
	 * @see     \Overplace\Response::getMessage()
	 * @var     string
	 */
	protected $_message;

	/**
	 * Response constructor.
	 * @access  public
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 * @param   array   $map        Array $property => $classname. Default is empty array. [Optional]
	 * @param   string  $message    Response message. Used when no properties returns from request but only message string. [Optional]
	 */
	public function __construct (array $properties = array(), array $map = array(), $message = '')
	{
		$this->_map = $map;
		$this->_message = $message;
		if (!empty($properties)){
			$this->assign($properties);
		}
	}

	/**
	 * Return array with all properties, excluded _map and _message property.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$properties = get_object_vars($this);
		unset($properties['_map'], $properties['_message']);

		$keys = array_keys($properties);
		$len = count($keys);
		for ($i = 0; $i < $len; $i++){
			if ($properties[$keys[$i]] instanceof \Overplace\Response || $properties[$keys[$i]] instanceof \Overplace\Collection){
				$properties[$keys[$i]] = $properties[$keys[$i]]->toArray();
			}
		}

		return $properties;
	}

	/**
	 * Message getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getMessage ()
	{
		return $this->_message;
	}

	/**
	 * Assign properties from array.
	 * Return instance of object.
	 * @access  protected
	 * @param   array   $properties     Array with property => value
	 */
	protected function assign (array $properties)
	{
		foreach ($properties as $key => $value){
			$property = $this->toCamelCase($key);
			if (property_exists($this, $property)){
				if (is_array($value) && array_key_exists($property, $this->_map)){
					$class = new \ReflectionClass($this->_map[$property]);
					if (isset(array_keys($value)[0]) && is_int(array_keys($value)[0])){
						$collection = array();
						$len = count($value);
						for ($i = 0; $i < $len; $i++){
							$collection[] = $class->newInstance($value[$i]);
						}
						$this->{$property} = new \Overplace\Collection($collection);
					}else {
						$this->{$property} = $class->newInstance($value);
					}
				}else {
					$this->{$property} = $value;
				}
			}
		}
	}

	/**
	 * Convert string snake case in camel case.
	 * @access  private
	 * @param   string  $string     String to convert.
	 *
	 * @return  string
	 */
	private function toCamelCase ($string)
	{
		if (!is_string($string) || empty($string)){
			return "";
		}

		return lcfirst(str_replace(" ", "", ucwords(str_replace("_", " ", $string))));
	}

}

?>