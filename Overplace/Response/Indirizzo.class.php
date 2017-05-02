<?php

namespace Overplace\Response;

/**
 * Class Indirizzo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Indirizzo
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Indirizzo extends \Overplace\Response
{

	/**
	 * Address Id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Region name.
	 * @access  protected
	 * @var     string
	 */
	protected $regione;

	/**
	 * Province name.
	 * @access  protected
	 * @var     string
	 */
	protected $provincia;

	/**
	 * Municipality name.
	 * @access  protected
	 * @var     string
	 */
	protected $comune;

	/**
	 * CAP name.
	 * @access  protected
	 * @var     string
	 */
	protected $cap;

	/**
	 * Address.
	 * @access  protected
	 * @var     string
	 */
	protected $indirizzo;

	/**
	 * Latitude.
	 * @access  protected
	 * @var     float
	 */
	protected $latitudine;

	/**
	 * Longitude.
	 * @access  protected
	 * @var     float
	 */
	protected $longitudine;

	/**
	 * Street View info.
	 * @access  protected
	 * @var     array
	 * @example array("latitudine" => 0.000000, "longitudine" => 0.000000, "heading" => 0.000000, "pitch" => 0.000000, "zoom" => 0.000000)
	 */
	protected $streetview;

	/**
	 * Indirizzo constructor.
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
	 * Regione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getRegione ()
	{
		return $this->regione;
	}

	/**
	 * Provincia getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getProvincia ()
	{
		return $this->provincia;
	}

	/**
	 * Comune getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getComune ()
	{
		return $this->comune;
	}

	/**
	 * Cap getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCap ()
	{
		return $this->cap;
	}

	/**
	 * Indirizzo getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getIndirizzo ()
	{
		return $this->indirizzo;
	}

	/**
	 * Latitudine getter.
	 * @access  public
	 *
	 * @return  float
	 */
	public function getLatitudine ()
	{
		return $this->latitudine;
	}

	/**
	 * Longitudine getter.
	 * @access  public
	 *
	 * @return  float
	 */
	public function getLongitudine ()
	{
		return $this->longitudine;
	}

	/**
	 * Streetview getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getStreetview ()
	{
		return $this->streetview;
	}

}

?>