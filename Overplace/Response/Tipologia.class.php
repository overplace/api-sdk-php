<?php

namespace Overplace\Response;

/**
 * Class Tipologia.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Tipologia
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Tipologia extends \Overplace\Response
{

	/**
	 * Id Tipologia.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Tipologia description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Tipologia constructor.
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