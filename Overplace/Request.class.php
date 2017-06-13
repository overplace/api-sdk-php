<?php

namespace Overplace;

/**
 * Class Request.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Request
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Request
{

	/**
	 * Request constructor.
	 * @access  public
	 */
	public function __construct ()
	{

	}

	/**
	 * Convert request object in array with only properties that have a value.
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