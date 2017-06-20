<?php

namespace Overplace\Request\Wmc\Coupon;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Wmc\Coupon
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Delete extends \Overplace\Request
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
	 * Delete constructor.
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
	 * @return  \Overplace\Request\Wmc\Coupon\Delete
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
	 * @return  \Overplace\Request\Wmc\Coupon\Delete
	 */
	public function setIdCoupon ($idCoupon)
	{
		$this->idCoupon = $idCoupon;

		return $this;
	}

}

?>