<?php

namespace Overplace\Request\Wmc\Catalogo;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Wmc\Catalogo
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        05/05/2017
 */
class Delete extends \Overplace\Request
{

	/**
	 * Id wmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Id catalogo.
	 * @access  public
	 * @var     int
	 */
	public $idCatalogo;

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
	 * @param   int     $idWmc   Id wmc
	 *
	 * @return  \Overplace\Request\Wmc\Catalogo\Delete
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdCatalogo setter.
	 * @access  public
	 * @param   int     $idCatalogo     Id catalogo
	 *
	 * @return  \Overplace\Request\Wmc\Catalogo\Delete
	 */
	public function setIdCatalogo ($idCatalogo)
	{
		$this->idCatalogo = $idCatalogo;

		return $this;
	}

}

?>