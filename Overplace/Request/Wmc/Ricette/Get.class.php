<?php

namespace Overplace\Request\Wmc\Ricette;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Ricette
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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdRicetta setter.
	 * @access  public
	 * @param   int     $idRicetta
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Get
	 */
	public function setIdRicetta ($idRicetta)
	{
		$this->idRicetta = $idRicetta;

		return $this;
	}

}

?>