<?php

namespace Overplace\Request\Resource\Ricette;

/**
 * Class Ingrediente.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ingrediente
 * @namespace   Overplace\Request\Resource\Ricette
 * @package     Overplace
 * @see         \Overplace\Request\Resource
 *
 * Date:        13/06/2017
 */
class Ingrediente extends \Overplace\Request\Resource
{

	/**
	 * Ingredient name.
	 * @access  public
	 * @var     string
	 */
	public $nome;

	/**
	 * Ingredient dose.
	 * @access  public
	 * @var     string
	 */
	public $dose;

	/**
	 * Ingrediente constructor.
	 * @access  public
	 * @see     \Overplace\Request\Resource::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
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
	 * Nome setter.
	 * @access  public
	 * @param   string  $nome
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Ingrediente
	 */
	public function setNome ($nome)
	{
		$this->nome = $nome;

		return $this;
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

	/**
	 * Dose setter.
	 * @access  public
	 * @param   string  $dose
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Ingrediente
	 */
	public function setDose ($dose)
	{
		$this->dose = $dose;

		return $this;
	}

}

?>