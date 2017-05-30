<?php

namespace Overplace\Request\Media;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Media
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        27/04/2017
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
	 * IdScheda setter.
	 * @access  public
	 * @param   int     $idScheda
	 *
	 * @return  \Overplace\Request\Media\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * idMedia setter.
	 * @access  public
	 * @param   int     $idMedia
	 *
	 * @return  \Overplace\Request\Media\Get
	 */
	public function setIdMedia ($idMedia)
	{
		$this->idMedia = $idMedia;

		return $this;
	}

}

?>