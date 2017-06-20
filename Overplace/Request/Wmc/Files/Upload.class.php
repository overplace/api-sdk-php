<?php

namespace Overplace\Request\Wmc\Files;

/**
 * Class Upload.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Upload
 * @namespace   Overplace\Request\Wmc\Files
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        17/05/2017
 */
class Upload extends \Overplace\Request
{

	/**
	 * IdWmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc   IdWmc.
	 *
	 * @return  \Overplace\Request\Wmc\Files\Upload
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdTipologia setter.
	 * @access  public
	 * @param   int     $idTipologia    Id tipologia.
	 *
	 * @return  \Overplace\Request\Wmc\Files\Upload
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
	 * @return  \Overplace\Request\Wmc\Files\Upload
	 */
	public function setFilename ($filename)
	{
		$this->filename = $filename;

		return $this;
	}

}

?>