<?php

namespace Overplace\Response;

/**
 * Class News.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Response
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
class News extends \Overplace\Response
{

	/**
	 * News Id.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * News status.
	 * @access  public
	 * @var     \Overplace\Response\Tipologia
	 */
	public $stato;

	/**
	 * News title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * News text body.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * News Foto.
	 * @access  public
	 * @var     \Overplace\Response\Foto
	 */
	public $foto;

	/**
	 * Id post facebook.
	 * @access  public
	 * @var     int
	 */
	public $idFacebook;

	/**
	 * Id tweet.
	 * @access  public
	 * @var     int
	 */
	public $idTweet;

	/**
	 * Flag linkedin. True if shared on linkedin, false otherwise.
	 * @access  public
	 * @var     bool
	 */
	public $linkedin;

	/**
	 * News start date publication.
	 * @access  public
	 * @var     string
	 */
	public $dataInizioPubblicazione;

	/**
	 * News constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct([
			'stato' => \Overplace\Response\Tipologia::class,
			'foto' => \Overplace\Response\Foto::class
		]);
	}

}

?>