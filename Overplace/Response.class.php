<?php

namespace Overplace;

/**
 * Class Response
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Response
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
class Response
{

	protected $_map;

	/**
	 * Response constructor.
	 * @access  public
	 * @param   array   $map    Array $property => $classname
	 */
	public function __construct (array $map = array())
	{
		$this->_map = $map;
	}

	public function __debugInfo ()
	{
		return $this->toArray();
	}

	/**
	 * Return array with all properties.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$properties = get_object_vars($this);
		unset($properties['_map']);
		return $properties;
	}

	/**
	 * Assign properties from array.
	 * Return instance of object.
	 * @access  public
	 * @param   array   $properties     Array with property => value
	 *
	 * @return  object
	 */
	public function assign (array $properties)
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
							$collection[] = $class->newInstance()->assign($value[$i]);
						}
						$this->{$property} = new \Overplace\Collection($collection);
					}else {
						$this->{$property} = $class->newInstance()->assign($value);
					}
				}else {
					$this->{$property} = $value;
				}
			}
		}

		return $this;
	}

	private function toCamelCase ($string)
	{
		if (!is_string($string) || empty($string)){
			return "";
		}

		return lcfirst(str_replace(" ", "", ucwords(str_replace("_", " ", $string))));
	}

}

?>