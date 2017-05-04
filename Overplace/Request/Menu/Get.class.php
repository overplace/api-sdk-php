<?php

namespace Overplace\Request\Menu;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Menu
 * @package     Overplace
 * @uses        \Overplace\Request
 *
 * Date:        04/05/2017
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
	 * Id menu.
	 * @access  public
	 * @var     int
	 */
	public $idMenu;

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
	 * @return  \Overplace\Request\Menu\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdMenu setter.
	 * @access  public
	 * @param   int     $idMenu     Id menu
	 *
	 * @return  \Overplace\Request\Menu\Get
	 */
	public function setIdMenu ($idMenu)
	{
		$this->idMenu = $idMenu;

		return $this;
	}

}

?>