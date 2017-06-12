<?php

namespace Overplace\Request\Coupon;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Coupon
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id coupon.
	 * @access  public
	 * @var     int
	 */
	public $idCoupon;

	/**
	 * Get constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * IdScheda setter.
	 * @access  public
	 * @param   int     $idScheda
	 *
	 * @return  \Overplace\Request\Coupon\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdCoupon setter.
	 * @access  public
	 * @param   int     $idCoupon
	 *
	 * @return  \Overplace\Request\Coupon\Get
	 */
	public function setIdCoupon ($idCoupon)
	{
		$this->idCoupon = $idCoupon;

		return $this;
	}

}

?>