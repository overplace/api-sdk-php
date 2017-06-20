<?php

namespace Overplace\Request\Wmc\News;

/**
 * Class Patch.
 * Request object for patch news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Patch
 * @namespace   Overplace\Request\Wmc\News
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        30/05/2017
 */
class Patch extends \Overplace\Request
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
	 * Id foto.
	 * @access  public
	 * @var     int
	 */
	public $idFoto;

	/**
	 * News title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * News message.
	 * @access  public
	 * @var     string
	 */
	public $messaggio;

	/**
	 * Flag to share news on facebook.
	 * @access  public
	 * @var     bool
	 */
	public $shareOnFacebook;

	/**
	 * Flag to share news on Twitter.
	 * @access  public
	 * @var     bool
	 */
	public $shareOnTwitter;

	/**
	 * Flag to share news on LinkedIn.
	 * @access  public
	 * @var     bool
	 */
	public $shareOnLinkedIn;

	/**
	 * DateTime string when to publish news.
	 * News will share immediately on Twitter and LinkedIn.
	 * @access  public
	 * @var     string
	 */
	public $dataPubblicazione;

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
	 * @return  \Overplace\Request\Wmc\News\Patch
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
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setIdNews ($idNews)
	{
		$this->idNews = $idNews;

		return $this;
	}

	/**
	 * IdFoto setter.
	 * @access  public
	 * @param   int     $idFoto
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setIdFoto ($idFoto)
	{
		$this->idFoto = $idFoto;

		return $this;
	}

	/**
	 * Titolo setter.
	 * @access  public
	 * @param   string  $titolo
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setTitolo ($titolo)
	{
		$this->titolo = $titolo;

		return $this;
	}

	/**
	 * Messaggio setter.
	 * @access  public
	 * @param   string  $messaggio
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setMessaggio ($messaggio)
	{
		$this->messaggio = $messaggio;

		return $this;
	}

	/**
	 * ShareOnFacebook setter.
	 * @access  public
	 * @param   bool    $shareOnFacebook
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setShareOnFacebook ($shareOnFacebook)
	{
		$this->shareOnFacebook = $shareOnFacebook;

		return $this;
	}

	/**
	 * ShareOnTwitter setter.
	 * @access  public
	 * @param   bool    $shareOnTwitter
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setShareOnTwitter ($shareOnTwitter)
	{
		$this->shareOnTwitter = $shareOnTwitter;

		return $this;
	}

	/**
	 * ShareOnLinkedIn setter.
	 * @access  public
	 * @param   bool    $shareOnLinkedIn
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setShareOnLinkedIn ($shareOnLinkedIn)
	{
		$this->shareOnLinkedIn = $shareOnLinkedIn;

		return $this;
	}

	/**
	 * DataPubblicazione setter.
	 * @access  public
	 * @param   string  $dataPubblicazione
	 *
	 * @return  \Overplace\Request\Wmc\News\Patch
	 */
	public function setDataPubblicazione ($dataPubblicazione)
	{
		$this->dataPubblicazione = $dataPubblicazione;

		return $this;
	}

}

?>