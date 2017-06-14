<?php

namespace Overplace\Request\Files;

/**
 * Class Upload.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Upload
 * @namespace   Overplace\Request\Files
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
	 * Type of file.
	 * @access  public
	 * @var     int
	 */
	public $idTipologia;

	/**
	 * File name.
	 * @access  public
	 * @var     string
	 */
	public $filename;

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
	 * @return  \Overplace\Request\Files\Upload
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
	 * @return  \Overplace\Request\Files\Upload
	 */
	public function setIdTipologia ($idTipologia)
	{
		$this->idTipologia = $idTipologia;

		return $this;
	}

	/**
	 * Filename setter.
	 * @access  public
	 * @param   string  $filename
	 *
	 * @return  \Overplace\Request\Files\Upload
	 */
	public function setFilename ($filename)
	{
		$this->filename = $filename;

		return $this;
	}

}

?>