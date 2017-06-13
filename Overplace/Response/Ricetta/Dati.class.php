<?php

namespace Overplace\Response\Ricetta;

/**
 * Class Dati.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Dati
 * @namespace   Overplace\Response\Ricetta
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        13/06/2017
 */
class Dati extends \Overplace\Response
{

	/**
	 * Preparation time for recipe.
	 * @access  protected
	 * @var     int
	 */
	protected $preparazione;

	/**
	 * Cooking time for recipe.
	 * @access  protected
	 * @var     int
	 */
	protected $cottura;

	/**
	 * Total recipe dose.
	 * @access  protected
	 * @var     int
	 */
	protected $dosi;

	/**
	 * Total difficulty of recipe.
	 * @access  protected
	 * @var     int
	 */
	protected $difficolta;

	/**
	 * Total cost of recipe.
	 * @access  protected
	 * @var     int
	 */
	protected $costo;

	/**
	 * Dati constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties);
	}

	/**
	 * Preparazione getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getPreparazione ()
	{
		return $this->preparazione;
	}

	/**
	 * Cottura getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getCottura ()
	{
		return $this->cottura;
	}

	/**
	 * Dosi getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getDosi ()
	{
		return $this->dosi;
	}

	/**
	 * Difficolta getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getDifficolta ()
	{
		return $this->difficolta;
	}

	/**
	 * Costo getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getCosto ()
	{
		return $this->costo;
	}

}

?>