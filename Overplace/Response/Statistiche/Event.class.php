<?php

namespace Overplace\Response\Statistiche;

/**
 * Class Event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Response\Statistiche
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        08/05/2017
 */
class Event extends \Overplace\Response
{

	/**
	 * Event Statistiche. Total number event.
	 * @access  protected
	 * @var     int
	 */
	protected $numeroEventi;

	/**
	 * Event Statistiche. Type description of events.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Event Statistiche. Type Action description of events.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Statistiche\TipologiaAzioneEvent
	 */
	protected $tipologiaAzione;

	/**
	 * Event Statistiche. Start date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizio;

	/**
	 * Event Statistiche. End date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFine;

	/**
	 * Event constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'tipologia' => \Overplace\Response\Tipologia::class,
			'tipologiaAzione' => \Overplace\Response\Statistiche\TipologiaAzioneEvent::class
		));
	}

	/**
	 * NumeroEventi getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getNumeroEventi ()
	{
		return $this->numeroEventi;
	}

	/**
	 * Tipologia getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Tipologia
	 */
	public function getTipologia ()
	{
		return $this->tipologia;
	}

	/**
	 * TipologiaAzione getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Statistiche\TipologiaAzioneEvent
	 */
	public function getTipologiaAzione ()
	{
		return $this->tipologiaAzione;
	}

	/**
	 * DataInizio getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataInizio ()
	{
		return $this->dataInizio;
	}

	/**
	 * DataFine getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataFine ()
	{
		return $this->dataFine;
	}

}

?>