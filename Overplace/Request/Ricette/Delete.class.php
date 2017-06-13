<?php

namespace Overplace\Request\Ricette;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Ricette
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        13/06/2017
 */
class Delete extends \Overplace\Request
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
	 * @return  \Overplace\Request\Ricette\Delete
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
	 * @return  \Overplace\Request\Ricette\Delete
	 */
	public function setIdRicetta ($idRicetta)
	{
		$this->idRicetta = $idRicetta;

		return $this;
	}

}

?>