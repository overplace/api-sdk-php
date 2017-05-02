<?php

namespace Overplace\Response;

/**
 * Class Categoria.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Categoria
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        21/04/2017
 */
class Categoria extends \Overplace\Response
{

	/**
	 * Category Id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Category description.
	 * @access  public
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Categoria constructor.
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
	 * Descrizione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDescrizione ()
	{
		return $this->descrizione;
	}

}

?>