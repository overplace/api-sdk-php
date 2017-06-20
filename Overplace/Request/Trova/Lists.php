<?php

namespace Overplace\Request\Trova;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Trova
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        19/06/2017
 */
class Lists extends \Overplace\Request\Lists
{

	const SORT_BY_RANK = 1;

	const SORT_BY_TITLE = 2;

	const SORT_BY_COMMENTS = 3;

	const SORT_BY_RATING = 4;

	const SORT_BY_DISTANCE = 5;


	const HAS_CHECKIN = 1;

	const HAS_EVENTS = 2;

	const HAS_RESERVATIONS = 3;

	const HAS_WIFI = 4;

	const HAS_COUPON = 5;

	const HAS_BOOKING = 6;

	/**
	 * What.
	 * @access  public
	 * @var     string
	 */
	public $cosa;

	/**
	 * Where.
	 * @access  public
	 * @var     string
	 */
	public $dove;

	/**
	 * Maximum distance of point <latitude, longitude> in km.
	 * @access  public
	 * @var     int
	 */
	public $distanza;

	/**
	 * Latitude of point.
	 * @access  public
	 * @var     float
	 */
	public $latitudine;

	/**
	 * Longitude of point.
	 * @access  public
	 * @var     float
	 */
	public $longitudine;

	/**
	 * A list of module must be present.
	 * @access  public
	 * @var     array
	 */
	public $moduli;

	/**
	 * Lists constructor.
	 * @access  public
	 * @see     \Overplace\Request\Lists::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Cosa setter.
	 * @access  public
	 * @param   string  $cosa
	 *
	 * @return  \Overplace\Request\Trova\Lists
	 */
	public function setCosa ($cosa)
	{
		$this->cosa = $cosa;

		return $this;
	}

	/**
	 * Dove setter.
	 * @access  public
	 * @param   string  $dove
	 *
	 * @return  \Overplace\Request\Trova\Lists
	 */
	public function setDove ($dove)
	{
		$this->dove = $dove;

		return $this;
	}

	/**
	 * Distanza setter.
	 * @access  public
	 * @param   int     $distanza
	 *
	 * @return  \Overplace\Request\Trova\Lists
	 */
	public function setDistanza ($distanza)
	{
		$this->distanza = $distanza;

		return $this;
	}

	/**
	 * Latitudine setter.
	 * @access  public
	 * @param   float   $latitudine
	 *
	 * @return  \Overplace\Request\Trova\Lists
	 */
	public function setLatitudine ($latitudine)
	{
		$this->latitudine = $latitudine;

		return $this;
	}

	/**
	 * Longitudine setter.
	 * @access  public
	 * @param   float   $longitudine
	 *
	 * @return  \Overplace\Request\Trova\Lists
	 */
	public function setLongitudine ($longitudine)
	{
		$this->longitudine = $longitudine;

		return $this;
	}

	/**
	 * Moduli setter.
	 * @access  public
	 * @param   array   $moduli
	 *
	 * @return  \Overplace\Request\Trova\Lists
	 */
	public function setModuli ($moduli)
	{
		$this->moduli = $moduli;

		return $this;
	}

}

?>