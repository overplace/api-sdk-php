<?php

namespace Overplace\Response\Statistiche;

/**
 * Class Views.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Views
 * @namespace   Overplace\Response\Statistiche
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        08/05/2017
 */
class Views extends \Overplace\Response
{

	/**
	 * Views Statistiche. Total views.
	 * @access  protected
	 * @var     int
	 */
	protected $visualizzazioni;

	/**
	 * Views Statistiche. Views with desktop device.
	 * @access  protected
	 * @var     int
	 */
	protected $visualizzazioniDesktop;

	/**
	 * Views Statistiche. Views with tablet device.
	 * @access  protected
	 * @var     int
	 */
	protected $visualizzazioniTablet;

	/**
	 * Views Statistiche. Views with mobile device.
	 * @access  protected
	 * @var     int
	 */
	protected $visualizzazioniMobile;

	/**
	 * Views Statistiche. Unique visitors.
	 * @access  protected
	 * @var     int
	 */
	protected $visitatori;

	/**
	 * Views Statistiche. Unique visitors with desktop device.
	 * @access  protected
	 * @var     int
	 */
	protected $visitatoriDesktop;

	/**
	 * Views Statistiche. Unique visitors with tablet device.
	 * @access  protected
	 * @var     int
	 */
	protected $visitatoriTablet;

	/**
	 * Views Statistiche. Unique visitors with mobile device.
	 * @access  protected
	 * @var     int
	 */
	protected $visitatoriMobile;

	/**
	 * Views Statistiche. Start date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizio;

	/**
	 * Views Statistiche. End date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFine;

	/**
	 * Views constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(

		));
	}

	/**
	 * Visualizzazioni getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisualizzazioni ()
	{
		return $this->visualizzazioni;
	}

	/**
	 * VisualizzazioniDesktop getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisualizzazioniDesktop ()
	{
		return $this->visualizzazioniDesktop;
	}

	/**
	 * VisualizzazioniTablet getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisualizzazioniTablet ()
	{
		return $this->visualizzazioniTablet;
	}

	/**
	 * VisualizzazioniMobile getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisualizzazioniMobile ()
	{
		return $this->visualizzazioniMobile;
	}

	/**
	 * Visitatori getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisitatori ()
	{
		return $this->visitatori;
	}

	/**
	 * VisitatoriDesktop getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisitatoriDesktop ()
	{
		return $this->visitatoriDesktop;
	}

	/**
	 * VisitatoriTablet getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisitatoriTablet ()
	{
		return $this->visitatoriTablet;
	}

	/**
	 * VisitatoriMobile getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVisitatoriMobile ()
	{
		return $this->visitatoriMobile;
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