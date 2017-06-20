<?php

namespace Overplace\Request\Wmc\News;

/**
 * Class Get.
 * Request object for get single news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\News
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
	 * Id news.
	 * @access  public
	 * @var     int
	 */
	public $idNews;

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
	 * @return  \Overplace\Request\Wmc\News\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdNews setter.
	 * @access  public
	 * @param   int     $idNews
	 *
	 * @return  \Overplace\Request\Wmc\News\Get
	 */
	public function setIdNews ($idNews)
	{
		$this->idNews = $idNews;

		return $this;
	}

}

?>