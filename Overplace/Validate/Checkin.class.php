<?php

namespace Overplace\Validate;

/**
 * Class Checkin.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Checkin
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @uses        \Overplace\Validate
 *
 * Date:        28/04/2017
 */
class Checkin extends \Overplace\Validate
{

	/**
	 * Checkin constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return properties required for getList method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForList ()
	{
		return array("idScheda");
	}

}

?>