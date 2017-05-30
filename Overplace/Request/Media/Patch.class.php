<?php

namespace Overplace\Request\Media;

/**
 * Class Patch.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Patch
 * @namespace   Overplace\Request\Media
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        17/05/2017
 */
class Patch extends \Overplace\Request
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
	 * Media title.
	 * @access  public
	 * @var     string
	 */
	public $title;

	/**
	 * Media alt.
	 * @access  public
	 * @var     string
	 */
	public $alt;

	/**
	 * Patch constructor.
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
	 * @return  \Overplace\Request\Media\Patch
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdMedia setter.
	 * @access  public
	 * @param   int     $idMedia
	 *
	 * @return  \Overplace\Request\Media\Patch
	 */
	public function setIdMedia ($idMedia)
	{
		$this->idMedia = $idMedia;

		return $this;
	}

	/**
	 * Title setter.
	 * @access  public
	 * @param   string  $title
	 *
	 * @return  \Overplace\Request\Media\Patch
	 */
	public function setTitle ($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Alt setter.
	 * @access  public
	 * @param   string  $alt
	 *
	 * @return  \Overplace\Request\Media\Patch
	 */
	public function setAlt ($alt)
	{
		$this->alt = $alt;

		return $this;
	}

}

?>