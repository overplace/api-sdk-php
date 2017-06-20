<?php

namespace Overplace\Request;

/**
 * Class Resource.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Resource
 * @namespace   Overplace\Request
 * @package     Overplace
 *
 * Date:        13/06/2017
 */
class Resource
{

	/**
	 * Resource constructor.
	 * @access  public
	 */
	public function __construct ()
	{

	}

	/**
	 * Convert Resource in array.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$properties = array_filter(get_object_vars($this));
		$keys = array_keys($properties);
		$len = count($keys);
		for ($i = 0; $i < $len; $i++){
			if ($properties[$keys[$i]] instanceof \Overplace\Request\Resource || $properties[$keys[$i]] instanceof \Overplace\Request\Resource\Collection){
				$properties[$keys[$i]] = $properties[$keys[$i]]->toArray();
			}
		}

		return $properties;
	}

}

?>