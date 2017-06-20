<?php

namespace Overplace\Request\Wmc\Media;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Media
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        27/04/2017
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
	 * Id media.
	 * @access  public
	 * @var     int
	 */
	public $idMedia;

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
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Media\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * idMedia setter.
	 * @access  public
	 * @param   int     $idMedia
	 *
	 * @return  \Overplace\Request\Wmc\Media\Get
	 */
	public function setIdMedia ($idMedia)
	{
		$this->idMedia = $idMedia;

		return $this;
	}

}

?>