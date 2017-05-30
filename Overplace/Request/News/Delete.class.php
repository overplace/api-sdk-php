<?php

namespace Overplace\Request\News;

/**
 * Class Delete.
 * Request object for delete news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\News
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        30/05/2017
 */
class Delete extends \Overplace\Request
{

	/**
	 * Id scheda.
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id news.
	 * @access  public
	 * @var     int
	 */
	public $idNews;

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
	 * @return  \Overplace\Request\News\Delete
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdNews setter.
	 * @access  public
	 * @param   int     $idNews
	 *
	 * @return  \Overplace\Request\News\Delete
	 */
	public function setIdNews ($idNews)
	{
		$this->idNews = $idNews;

		return $this;
	}

}

?>