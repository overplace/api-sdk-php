<?php

namespace Overplace\Response;

/**
 * Class News.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        19/04/2017
 */
class News extends \Overplace\Response
{

	/**
	 * News Id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * News status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * News title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * News text body.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * News Foto.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Foto
	 */
	protected $foto;

	/**
	 * Id post facebook.
	 * @access  protected
	 * @var     int
	 */
	protected $idFacebook;

	/**
	 * Id tweet.
	 * @access  protected
	 * @var     int
	 */
	protected $idTweet;

	/**
	 * Flag linkedin. True if shared on linkedin, false otherwise.
	 * @access  protected
	 * @var     bool
	 */
	protected $linkedin;

	/**
	 * News start date publication.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizioPubblicazione;

	/**
	 * News constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'foto' => \Overplace\Response\Foto::class
		));
	}

	/**
	 * Id getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * Stato getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getStato ()
	{
		return $this->stato;
	}

	/**
	 * Titolo getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getTitolo ()
	{
		return $this->titolo;
	}

	/**
	 * Descrizione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDescrizione ()
	{
		return $this->descrizione;
	}

	/**
	 * Foto getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Foto
	 */
	public function getFoto ()
	{
		return $this->foto;
	}

	/**
	 * IdFacebook getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getIdFacebook ()
	{
		return $this->idFacebook;
	}

	/**
	 * IdTweet getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getIdTweet ()
	{
		return $this->idTweet;
	}

	/**
	 * Linkedin getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isLinkedin ()
	{
		return $this->linkedin;
	}

	/**
	 * DataInizioPubblicazione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataInizioPubblicazione ()
	{
		return $this->dataInizioPubblicazione;
	}

}

?>