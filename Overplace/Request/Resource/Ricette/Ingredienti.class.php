<?php

namespace Overplace\Request\Resource\Ricette;

/**
 * Class Ingredienti.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ingredienti
 * @namespace   Overplace\Request\Resource\Ricette
 * @package     Overplace
 * @see         \Overplace\Request\Resource\Collection
 *
 * Date:        13/06/2017
 */
class Ingredienti extends \Overplace\Request\Resource\Collection
{

	/**
	 * Ingredienti constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Add ingredient.
	 * @access  public
	 * @param   \Overplace\Request\Resource\Ricette\Ingrediente     $ingrediente
	 *
	 * @return  \Overplace\Request\Resource\Ricette\Ingredienti
	 */
	public function add (\Overplace\Request\Resource\Ricette\Ingrediente $ingrediente)
	{
		$this->data[] = $ingrediente;

		return $this;
	}

}

?>