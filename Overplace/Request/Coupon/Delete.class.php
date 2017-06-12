<?php

namespace Overplace\Request\Coupon;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Coupon
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Delete extends \Overplace\Request
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
	 * Delete constructor.
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
	 * @return  \Overplace\Request\Coupon\Delete
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
	 * @return  \Overplace\Request\Coupon\Delete
	 */
	public function setIdCoupon ($idCoupon)
	{
		$this->idCoupon = $idCoupon;

		return $this;
	}

}

?>