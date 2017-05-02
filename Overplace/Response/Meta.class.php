<?php

namespace Overplace\Response;

/**
 * Class Meta.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Meta
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Meta extends \Overplace\Response
{

	/**
	 * Meta title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Meta description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Meta keywords.
	 * @access  protected
	 * @var     string
	 */
	protected $keywords;

	/**
	 * Meta constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties);
	}

	/**
	 * Titolo getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getTitolo ()
	{
		return $this->titolo;
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

	/**
	 * Keywords getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getKeywords ()
	{
		return $this->keywords;
	}

}

?>