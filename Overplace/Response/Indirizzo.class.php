<?php

namespace Overplace\Response;

/**
 * Class Indirizzo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Indirizzo
 * @namespace   Overplace\Response
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Indirizzo extends \Overplace\Response
{

	/**
	 * Address Id.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Region name.
	 * @access  public
	 * @var     string
	 */
	public $regione;

	/**
	 * Province name.
	 * @access  public
	 * @var     string
	 */
	public $provincia;

	/**
	 * Municipality name.
	 * @access  public
	 * @var     string
	 */
	public $comune;

	/**
	 * CAP name.
	 * @access  public
	 * @var     string
	 */
	public $cap;

	/**
	 * Address.
	 * @access  public
	 * @var     string
	 */
	public $indirizzo;

	/**
	 * Latitude.
	 * @access  public
	 * @var     float
	 */
	public $latitudine;

	/**
	 * Longitude.
	 * @access  public
	 * @var     float
	 */
	public $longitudine;

	/**
	 * Street View info.
	 * @access  public
	 * @var     array
	 * @example array("latitudine" => 0.000000, "longitudine" => 0.000000, "heading" => 0.000000, "pitch" => 0.000000, "zoom" => 0.000000)
	 */
	public $streetview;

	/**
	 * Indirizzo constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

}

?>