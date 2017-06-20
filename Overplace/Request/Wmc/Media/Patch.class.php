<?php

namespace Overplace\Request\Wmc\Media;

/**
 * Class Patch.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Patch
 * @namespace   Overplace\Request\Wmc\Media
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        17/05/2017
 */
class Patch extends \Overplace\Request
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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Media\Patch
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdMedia setter.
	 * @access  public
	 * @param   int     $idMedia
	 *
	 * @return  \Overplace\Request\Wmc\Media\Patch
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
	 * @return  \Overplace\Request\Wmc\Media\Patch
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
	 * @return  \Overplace\Request\Wmc\Media\Patch
	 */
	public function setAlt ($alt)
	{
		$this->alt = $alt;

		return $this;
	}

}

?>