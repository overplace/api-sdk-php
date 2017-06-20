<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Coupon.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Coupon
 * @namespace   Overplace\Validate\Wmc
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
		return array("idWmc");
	}

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("idWmc", "idCoupon");
	}

	/**
	 * Return properties required for create method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForCreate ()
	{
		return array("idWmc", "idFoto", "titolo", "descrizione", "sconto", "condizioniLegali", "dataInizioErogazione", "dataFineErogazione");
	}

	/**
	 * Return properties required for patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idWmc", "idCoupon");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idWmc", "idCoupon");
	}

}

?>