<?php

namespace Overplace\Request\Wmc\Promozioni;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Promozioni
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        13/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * IdWmc.
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Id promozione.
	 * @access  public
	 * @var     int
	 */
	public $idPromozione;

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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Promozioni\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdPromozione setter.
	 * @access  public
	 * @param   int     $idPromozione
	 *
	 * @return  \Overplace\Request\Wmc\Promozioni\Get
	 */
	public function setIdPromozione ($idPromozione)
	{
		$this->idPromozione = $idPromozione;

		return $this;
	}

}

?>