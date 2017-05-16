<?php

namespace Overplace\Response\Statistiche;

/**
 * Class TipologiaAzioneEvent.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Tipologia
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        20/04/2017
 */
class TipologiaAzioneEvent extends \Overplace\Response
{

	/**
	 * Id Tipologia Azione Event.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Tipologia Azione Event description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Tipologia Azione Event total number event.
	 * @access  protected
	 * @var     int
	 */
	protected $numeroEventi;

	/**
	 * TipologiaAzioneEvent constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties);
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
	 * NumeroEventi getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getNumeroEventi ()
	{
		return $this->numeroEventi;
	}

}

?>