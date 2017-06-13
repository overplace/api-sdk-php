<?php

namespace Overplace\Validate;

/**
 * Class Promozioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Promozioni
 * @namespace   Overplace\Validate
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
		return array("idScheda");
	}

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("idScheda", "idPromozione");
	}

}

?>