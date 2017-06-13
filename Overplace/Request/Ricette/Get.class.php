<?php

namespace Overplace\Request\Ricette;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Ricette
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        13/06/2017
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
	 * Id ricetta.
	 * @access  public
	 * @var     int
	 */
	public $idRicetta;

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
	 * @return  \Overplace\Request\Ricette\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdRicetta setter.
	 * @access  public
	 * @param   int     $idRicetta
	 *
	 * @return  \Overplace\Request\Ricette\Get
	 */
	public function setIdRicetta ($idRicetta)
	{
		$this->idRicetta = $idRicetta;

		return $this;
	}

}

?>