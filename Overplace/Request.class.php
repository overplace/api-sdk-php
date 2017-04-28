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
	 * Return array with only properties that have a value.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		return array_filter(get_object_vars($this));
	}

}

?>