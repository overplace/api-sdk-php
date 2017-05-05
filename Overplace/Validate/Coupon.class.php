<?php

namespace Overplace\Validate;

/**
 * Class Coupon.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Coupon
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        03/05/2017
 */
class Coupon extends \Overplace\Validate
{

	/**
	 * Coupon constructor.
	 * @access  public
	 * @see     \Overplace\Validate::__construct()
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