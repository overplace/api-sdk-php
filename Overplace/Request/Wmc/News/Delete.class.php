<?php

namespace Overplace\Request\Wmc\News;

/**
 * Class Delete.
 * Request object for delete news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Wmc\News
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        30/05/2017
 */
class Delete extends \Overplace\Request
{

	/**
	 * IdWmc.
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
	 * Flag delete news from Facebook.
	 * @access  public
	 * @var     bool
	 */
	public $deleteOnFacebook;

	/**
	 * Flag delete news from Twitter.
	 * @access  public
	 * @var     bool
	 */
	public $deleteOnTwitter;

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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\News\Delete
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
	 * @return  \Overplace\Request\Wmc\News\Delete
	 */
	public function setIdNews ($idNews)
	{
		$this->idNews = $idNews;

		return $this;
	}

	/**
	 * DeleteOnFacebook setter.
	 * @access  public
	 * @param   bool    $deleteOnFacebook
	 *
	 * @return  \Overplace\Request\Wmc\News\Delete
	 */
	public function setDeleteOnFacebook ($deleteOnFacebook)
	{
		$this->deleteOnFacebook = $deleteOnFacebook;

		return $this;
	}

	/**
	 * DeleteOnTwitter setter.
	 * @access  public
	 * @param   bool    $deleteOnTwitter
	 *
	 * @return  \Overplace\Request\Wmc\News\Delete
	 */
	public function setDeleteOnTwitter ($deleteOnTwitter)
	{
		$this->deleteOnTwitter = $deleteOnTwitter;

		return $this;
	}

}

?>