<?php

namespace Overplace\Request\Wmc\Ricette;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Wmc\Ricette
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        13/06/2017
 */
class Delete extends \Overplace\Request
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
	 * Delete constructor.
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
	 * @return  \Overplace\Request\Wmc\Ricette\Delete
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
	 * @return  \Overplace\Request\Wmc\Ricette\Delete
	 */
	public function setIdRicetta ($idRicetta)
	{
		$this->idRicetta = $idRicetta;

		return $this;
	}

}

?>