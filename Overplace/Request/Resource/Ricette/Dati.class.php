<?php

namespace Overplace\Request\Resource\Ricette;

/**
 * Class Dati.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Dati
 * @namespace   Overplace\Request\Resource\Ricette
 * @package     Overplace
 * @see         \Overplace\Request\Resource
 *
 * Date:        13/06/2017
 */
class Dati extends \Overplace\Request\Resource
{

	/**
	 * Preparation time for recipe.
	 * @access  public
	 * @var     int
	 */
	public $preparazione;

	/**
	 * Cooking time for recipe.
	 * @access  public
	 * @var     int
	 */
	public $cottura;

	/**
	 * Total recipe dose.
	 * @access  public
	 * @var     int
	 */
	public $dosi;

	/**
	 * Total difficulty of recipe.
	 * @access  public
	 * @var     int
	 */
	public $difficolta;

	/**
	 * Total cost of recipe.
	 * @access  public
	 * @var     int
	 */
	public $costo;

	/**
	 * Dati constructor.
	 * @access  public
	 * @see     \Overplace\Request\Resource::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
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
	 * Preparazione setter.
	 * @access  public
	 * @param   int     $preparazione
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Dati
	 */
	public function setPreparazione ($preparazione)
	{
		$this->preparazione = $preparazione;

		return $this;
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
	 * Cottura setter.
	 * @access  public
	 * @param   int     $cottura
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Dati
	 */
	public function setCottura ($cottura)
	{
		$this->cottura = $cottura;

		return $this;
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
	 * Dosi setter.
	 * @access  public
	 * @param   int     $dosi
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Dati
	 */
	public function setDosi ($dosi)
	{
		$this->dosi = $dosi;

		return $this;
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
	 * Difficolta setter.
	 * @access  public
	 * @param   int     $difficolta
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Dati
	 */
	public function setDifficolta ($difficolta)
	{
		$this->difficolta = $difficolta;

		return $this;
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

	/**
	 * Costo setter.
	 * @access  public
	 * @param   int     $costo
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Dati
	 */
	public function setCosto ($costo)
	{
		$this->costo = $costo;

		return $this;
	}

}

?>