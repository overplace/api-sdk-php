<?php

namespace Overplace\Validate;

/**
 * Class Wmc.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Wmc
 * @namespace   Overplace\Validate
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Wmc extends \Overplace\Validate
{

	/**
	 * Wmc constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return properties required for get method.
	 * @return array
	 */
	public function getRequiredForGet ()
	{
		return array('idScheda');
	}

}

?>