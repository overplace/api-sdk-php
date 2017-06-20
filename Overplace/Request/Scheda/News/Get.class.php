<?php

namespace Overplace\Request\Scheda\News;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Scheda\News
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        20/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id Scheda.
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id News.
	 * @access  public
	 * @var     int
	 */
	public $idNews;

	/**
	 * Get constructor.
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
	 * @return  \Overplace\Request\Scheda\News\Get
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
	 * @return  \Overplace\Request\Scheda\News\Get
	 */
	public function setIdNews ($idNews)
	{
		$this->idNews = $idNews;

		return $this;
	}

}

?>