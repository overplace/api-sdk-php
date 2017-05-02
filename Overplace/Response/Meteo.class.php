<?php

namespace Overplace\Response;

/**
 * Class Meteo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Meteo
 * @namespace   Overplace\Response
 *
 * Date:        28/04/2017
 */
class Meteo extends \Overplace\Response
{

	/**
	 * Meteo id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Meteo condition.
	 * @access  protected
	 * @var     string
	 */
	protected $condition;

	/**
	 * Meteo minimum temperature.
	 * @access  protected
	 * @var     int
	 */
	protected $min;

	/**
	 * Meteo minimum temperature decimal precision.
	 * @access  protected
	 * @var     float
	 */
	protected $minFloat;

	/**
	 * Meteo high temperature.
	 * @access  protected
	 * @var     int
	 */
	protected $high;

	/**
	 * Meteo high temperature decimal precision.
	 * @access  protected
	 * @var     float
	 */
	protected $highFloat;

	/**
	 * Meteo probability of precipitation.
	 * @access  protected
	 * @var
	 */
	protected $precipitation;

	/**
	 * Meteo wind speed (Km/h)
	 * @access  protected
	 * @var     int|float
	 */
	protected $windSpeed;

	/**
	 * Meteo humidity (%).
	 * @access  protected
	 * @var     string
	 */
	protected $humidity;

	/**
	 * Meteo pressure (atm).
	 * @access  protected
	 * @var     int
	 */
	protected $pressure;

	/**
	 * Meteo date.
	 * @access  protected
	 * @var     string
	 */
	protected $data;

	/**
	 * Meteo constructor.
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
	 * Condition getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCondition ()
	{
		return $this->condition;
	}

	/**
	 * Min getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getMin ()
	{
		return $this->min;
	}

	/**
	 * MinFloat getter.
	 * @access  public
	 *
	 * @return  float
	 */
	public function getMinFloat ()
	{
		return $this->minFloat;
	}

	/**
	 * High getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getHigh ()
	{
		return $this->high;
	}

	/**
	 * HighFloat getter.
	 * @access  public
	 *
	 * @return  float
	 */
	public function getHighFloat ()
	{
		return $this->highFloat;
	}

	/**
	 * Precipitation getter.
	 * @access  public
	 *
	 * @return  mixed
	 */
	public function getPrecipitation ()
	{
		return $this->precipitation;
	}

	/**
	 * WindSpeed getter.
	 * @access  public
	 *
	 * @return  float|int
	 */
	public function getWindSpeed ()
	{
		return $this->windSpeed;
	}

	/**
	 * Humidity getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getHumidity ()
	{
		return $this->humidity;
	}

	/**
	 * Pressure getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getPressure ()
	{
		return $this->pressure;
	}

	/**
	 * Data getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getData ()
	{
		return $this->data;
	}

}

?>