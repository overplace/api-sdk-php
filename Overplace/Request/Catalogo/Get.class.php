<?php

namespace Overplace\Request\Catalogo;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Catalogo
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        05/05/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id catalogo.
	 * @access  public
	 * @var     int
	 */
	public $idCatalogo;

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
	 * @param   int     $idScheda   Id scheda
	 *
	 * @return  \Overplace\Request\Catalogo\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;
		return $this;
	}

	/**
	 * IdCatalogo setter.
	 * @access  public
	 * @param   int     $idCatalogo Id catalogo
	 *
	 * @return  \Overplace\Request\Catalogo\Get
	 */
	public function setIdCatalogo ($idCatalogo)
	{
		$this->idCatalogo = $idCatalogo;

		return $this;
	}

}

?>