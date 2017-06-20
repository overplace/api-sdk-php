<?php

namespace Overplace\Request\Wmc\Coupon;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Coupon
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id wmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

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
	 * idWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdCoupon setter.
	 * @access  public
	 * @param   int     $idCoupon
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Get
	 */
	public function setIdCoupon ($idCoupon)
	{
		$this->idCoupon = $idCoupon;

		return $this;
	}

}

?>