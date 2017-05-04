<?php

namespace Overplace\Response;

/**
 * Class Utente.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Utente
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        03/05/2017
 */
class Utente extends \Overplace\Response
{

	/**
	 * Utente id.
	 * @access  protected
	 * @var     string
	 */
	protected $id;

	/**
	 * Utente status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Utente type.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Utente username.
	 * @access  protected
	 * @var     string
	 */
	protected $username;

	/**
	 * Utente nickname.
	 * @access  protected
	 * @var     string
	 */
	protected $nickname;

	/**
	 * Utente name.
	 * @access  protected
	 * @var     string
	 */
	protected $nome;

	/**
	 * Utente surname.
	 * @access  protected
	 * @var     string
	 */
	protected $cognome;

	/**
	 * Utente bithday.
	 * @access  protected
	 * @var     string
	 */
	protected $compleanno;

	/**
	 * Utente gender.
	 * @access  protected
	 * @var     string
	 */
	protected $sesso;

	/**
	 * Utente occupation.
	 * @access  protected
	 * @var     string
	 */
	protected $professione;

	/**
	 * Utente interests.
	 * @access  protected
	 * @var     string
	 */
	protected $interessi;

	/**
	 * Utente sports.
	 * @access  protected
	 * @var     string
	 */
	protected $sport;

	/**
	 * Utente music.
	 * @access  protected
	 * @var     string
	 */
	protected $musica;

	/**
	 * Utente books.
	 * @access  protected
	 * @var     string
	 */
	protected $libri;

	/**
	 * Utente films.
	 * @access  protected
	 * @var     string
	 */
	protected $film;

	/**
	 * Utente pictures.
	 * @access  protected
	 * @var     string
	 */
	protected $avatar;

	/**
	 * Utente address.
	 * @access  protected
	 * @var     \Overplace\Response\Indirizzo
	 */
	protected $indirizzo;

	/**
	 * Utente phone numbers.
	 * @access  protected
	 * @var     array
	 */
	protected $cellulari;

	/**
	 * Utente connected users.
	 * @access  protected
	 * @var     \Overplace\Collection
	 */
	protected $utentiCollegati;

	/**
	 * Utente emails.
	 * @access  protected
	 * @var     array
	 */
	protected $emails;

	/**
	 * Utente constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'tipologia' => \Overplace\Response\Tipologia::class,
			'indirizzo' => \Overplace\Response\Indirizzo::class,
			'utentiCollegati' => \Overplace\Response\Utente::class
		));
	}

	/**
	 * Id getter.
	 * @access  public
	 *
	 * @return  string
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
	 * Tipologia getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getTipologia ()
	{
		return $this->tipologia;
	}

	/**
	 * Username getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getUsername ()
	{
		return $this->username;
	}

	/**
	 * Nickname getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getNickname ()
	{
		return $this->nickname;
	}

	/**
	 * Nome getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getNome ()
	{
		return $this->nome;
	}

	/**
	 * Cognome getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCognome ()
	{
		return $this->cognome;
	}

	/**
	 * Compleanno getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCompleanno ()
	{
		return $this->compleanno;
	}

	/**
	 * Sesso getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getSesso ()
	{
		return $this->sesso;
	}

	/**
	 * Professione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getProfessione ()
	{
		return $this->professione;
	}

	/**
	 * Interessi getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getInteressi ()
	{
		return $this->interessi;
	}

	/**
	 * Sport getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getSport ()
	{
		return $this->sport;
	}

	/**
	 * Musica getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getMusica ()
	{
		return $this->musica;
	}

	/**
	 * Libri getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getLibri ()
	{
		return $this->libri;
	}

	/**
	 * Film getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getFilm ()
	{
		return $this->film;
	}

	/**
	 * Avatar getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getAvatar ()
	{
		return $this->avatar;
	}

	/**
	 * Indirizzo getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Indirizzo
	 */
	public function getIndirizzo ()
	{
		return $this->indirizzo;
	}

	/**
	 * Cellulari getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getCellulari ()
	{
		return $this->cellulari;
	}

	/**
	 * UtentiCollegati getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection
	 */
	public function getUtentiCollegati ()
	{
		return $this->utentiCollegati;
	}

	/**
	 * Emails getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getEmails ()
	{
		return $this->emails;
	}

}

?>