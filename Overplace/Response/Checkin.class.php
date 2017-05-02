<?php

namespace Overplace\Response;

/**
 * Class Checkin.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Checkin
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        28/04/2017
 */
class Checkin extends \Overplace\Response
{

	/**
	 * Checkin id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Checkin status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Checkin type.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Checkin description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Checkin Number of times required to subscribe.
	 * @access  protected
	 * @var     int
	 */
	protected $checkinNecessari;

	/**
	 * Checkin available.
	 * @access  protected
	 * @var     int
	 */
	protected $premiErogabili;

	/**
	 * Checkin dispense.
	 * @access  protected
	 * @var     int
	 */
	protected $premiDistribuiti;

	/**
	 * Checkin flag unlimited. If true available checkin are unlimited (in this case
	 * $premiErogabili must be ignored), false if are limited.
	 * @access  protected
	 * @var     bool
	 */
	protected $premiIllimitati;

	/**
	 * Checkin start date.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizioOfferta;

	/**
	 * Checkin end date.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFineOfferta;

	/**
	 * Checkin constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'tipologia' => \Overplace\Response\Tipologia::class
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
	 * CheckinNecessari getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getCheckinNecessari ()
	{
		return $this->checkinNecessari;
	}

	/**
	 * PremiErogabili getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getPremiErogabili ()
	{
		return $this->premiErogabili;
	}

	/**
	 * PremiDistribuiti getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getPremiDistribuiti ()
	{
		return $this->premiDistribuiti;
	}

	/**
	 * PremiIllimitati getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isPremiIllimitati ()
	{
		return $this->premiIllimitati;
	}

	/**
	 * DataInizioOfferta getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataInizioOfferta ()
	{
		return $this->dataInizioOfferta;
	}

	/**
	 * DataFineOfferta getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataFineOfferta ()
	{
		return $this->dataFineOfferta;
	}

}

?>