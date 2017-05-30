<?php

namespace Overplace\Request\Media;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Media
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        17/05/2017
 */
class Delete extends \Overplace\Request
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
	 * Delete constructor.
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
	 * @return  \Overplace\Request\Media\Delete
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
	 * @return  \Overplace\Request\Media\Delete
	 */
	public function setIdMedia ($idMedia)
	{
		$this->idMedia = $idMedia;

		return $this;
	}

}

?>