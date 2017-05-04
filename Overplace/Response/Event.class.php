<?php

namespace Overplace\Response;

/**
 * Class Event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        28/04/2017
 */
class Event extends \Overplace\Response
{

	/**
	 * Event id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Event status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Event synchronization status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $statoSincro;

	/**
	 * Event title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Event description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Event picture.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Foto
	 */
	protected $foto;

	/**
	 * Event facebook id.
	 * @access  protected
	 * @var     int
	 */
	protected $idEventoFacebook;

	/**
	 * Event start date.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizioEvento;

	/**
	 * Event end date.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFineEvento;

	/**
	 * Event constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'statoSincro' => \Overplace\Response\Tipologia::class,
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
	 * StatoSincro getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getStatoSincro ()
	{
		return $this->statoSincro;
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
	 * IdEventoFacebook getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getIdEventoFacebook ()
	{
		return $this->idEventoFacebook;
	}

	/**
	 * DataInizioEvento getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataInizioEvento ()
	{
		return $this->dataInizioEvento;
	}

	/**
	 * DataFineEvento getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataFineEvento ()
	{
		return $this->dataFineEvento;
	}

}

?>