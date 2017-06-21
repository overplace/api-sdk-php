<?php

namespace Overplace\Request\Scheda\Promozioni;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Scheda\Promozioni
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        20/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id scheda.
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

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
	 * IdScheda setter.
	 * @access  public
	 * @param   int     $idScheda
	 *
	 * @return  \Overplace\Request\Scheda\Promozioni\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdPromozione setter.
	 * @access  public
	 * @param   int     $idPromozione
	 *
	 * @return  \Overplace\Request\Scheda\Promozioni\Get
	 */
	public function setIdPromozione ($idPromozione)
	{
		$this->idPromozione = $idPromozione;

		return $this;
	}

}

?>