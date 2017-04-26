<?php

namespace Overplace\Response;

/**
 * Class Categoria.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Categoria
 * @namespace   Overplace\Response
 *
 * Date:        21/04/2017
 */
class Categoria extends \Overplace\Response
{

	/**
	 * Category Id.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Category description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Categoria constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

}

?>