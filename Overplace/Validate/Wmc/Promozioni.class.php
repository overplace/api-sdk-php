<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Promozioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Promozioni
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        28/04/2017
 */
class Promozioni extends \Overplace\Validate
{

	/**
	 * Promozioni constructor.
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
		return array("idWmc", "idPromozione");
	}

}

?>