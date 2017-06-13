<?php

namespace Overplace\Response;

/**
 * Class Allergene.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Allergene
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        13/06/2017
 */
class Allergene extends \Overplace\Response
{

	/**
	 * Id allergene.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Allergene description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Allergene constructor.
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