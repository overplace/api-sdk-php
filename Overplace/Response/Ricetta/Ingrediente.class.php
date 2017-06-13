<?php

namespace Overplace\Response\Ricetta;

/**
 * Class Ingrediente.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ingrediente
 * @namespace   Overplace\Response\Ricetta
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        13/06/2017
 */
class Ingrediente extends \Overplace\Response
{

	/**
	 * Ingredient name.
	 * @access  public
	 * @var     string
	 */
	protected $nome;

	/**
	 * Ingredient dose.
	 * @access  public
	 * @var     string
	 */
	protected $dose;

	/**
	 * Ingrediente constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties);
	}

	/**
	 * Nome getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getNome ()
	{
		return $this->nome;
	}

	/**
	 * Dose getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDose ()
	{
		return $this->dose;
	}

}

?>