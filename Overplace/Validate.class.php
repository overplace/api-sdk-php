<?php

namespace Overplace;

/**
 * Class Validate.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Validate
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
class Validate
{

	/**
	 * Validate constructor.
	 * @access  public
	 */
	public function __construct ()
	{

	}

	/**
	 * Validate request object for specific request.
	 * @final
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   string              $method     Method name
	 * @param   \Overplace\Request  $object     Instance of Request Object.
	 *
	 * @return  bool
	 */
	public final function validate ($method, \Overplace\Request $object)
	{
		$method = "getRequiredFor" . ucfirst($method);
		if (!method_exists($this, $method)){
			throw new \Overplace\Exception\Service("Validate method {$method} doesn't exists!");
		}
		$properties = array_keys($object->toArray());
		return empty(array_diff($this->{$method}(), $properties));
	}


}

?>