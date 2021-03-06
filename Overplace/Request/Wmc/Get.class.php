<?php

namespace Overplace\Request\Wmc;

/**
 * Class Get.
 * Request object for get single wmc.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        20/04/2017
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
	 * Get constructor.
	 * @access  public
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
	 * @return  \Overplace\Request\Wmc\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

}

?>