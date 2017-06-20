<?php

namespace Overplace\Request\Wmc\Menu;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Menu
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        04/05/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * IdWmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc   IdWmc
	 *
	 * @return  \Overplace\Request\Wmc\Menu\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdMenu setter.
	 * @access  public
	 * @param   int     $idMenu     Id menu
	 *
	 * @return  \Overplace\Request\Wmc\Menu\Get
	 */
	public function setIdMenu ($idMenu)
	{
		$this->idMenu = $idMenu;

		return $this;
	}

}

?>