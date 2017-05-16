<?php

namespace Overplace\Response\Statistiche;

/**
 * Class Interazioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Interazioni
 * @namespace   Overplace\Response\Statistiche
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        08/05/2017
 */
class Interazioni extends \Overplace\Response
{

	/**
	 * Interazioni Statistiche. Type description interaction.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Interazioni Statistiche. Total number interaction.
	 * @access  protected
	 * @var     int
	 */
	protected $interazioni;

	/**
	 * Interazioni Statistiche. Start date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizio;

	/**
	 * Interazioni Statistiche. End date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFine;

	/**
	 * Interazioni constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'tipologia' => \Overplace\Response\Tipologia::class
		));
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
	 * Interazioni getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getInterazioni ()
	{
		return $this->interazioni;
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