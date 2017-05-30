<?php

namespace Overplace\Request\Media;

/**
 * Class Upload.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Upload
 * @namespace   Overplace\Request\Media
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        17/05/2017
 */
class Upload extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Type of media.
	 * @access  public
	 * @var     int
	 */
	public $idTipologia;

	/**
	 * File base64 encoded.
	 * @access  public
	 * @var     string
	 */
	public $file;

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
	 * Upload constructor.
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
	 * @param   int     $idScheda   Id scheda.
	 *
	 * @return  \Overplace\Request\Media\Upload
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdTipologia setter.
	 * @access  public
	 * @param   int     $idTipologia    Id tipologia.
	 *
	 * @return  \Overplace\Request\Media\Upload
	 */
	public function setIdTipologia ($idTipologia)
	{
		$this->idTipologia = $idTipologia;

		return $this;
	}

	/**
	 * File setter.
	 * @access  public
	 * @param   string  $file
	 *
	 * @return  \Overplace\Request\Media\Upload
	 */
	public function setFile ($file)
	{
		$this->file = $file;

		return $this;
	}

	/**
	 * Title setter.
	 * @access  public
	 * @param   string  $title  Media title.
	 *
	 * @return  \Overplace\Request\Media\Upload
	 */
	public function setTitle ($title)
	{
		$this->title = $title;

		return $this;
	}

	/**
	 * Alt setter.
	 * @access  public
	 * @param   string  $alt    Media alt.
	 *
	 * @return  \Overplace\Request\Media\Upload
	 */
	public function setAlt ($alt)
	{
		$this->alt = $alt;

		return $this;
	}

}

?>