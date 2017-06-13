<?php

namespace Overplace\Request\Resource;

/**
 * Class Allergene.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Allergene
 * @namespace   Overplace\Request\Resource
 * @package     Overplace
 * @see         \Overplace\Request\Resource
 *
 * Date:        13/06/2017
 */
class Allergene extends \Overplace\Request\Resource
{

	/**
	 * Id allergene.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Allergene description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Allergene constructor.
	 * @access  public
	 * @see     \Overplace\Request\Resource::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
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
	 * Id setter.
	 * @access  public
	 * @param   int     $id
	 *
	 * @return  \Overplace\Request\Resource\Allergene
	 */
	public function setId ($id)
	{
		$this->id = $id;

		return $this;
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
	 * Descrizione setter.
	 * @access  public
	 * @param   string  $descrizione
	 *
	 * @return  \Overplace\Request\Resource\Allergene
	 */
	public function setNome ($descrizione)
	{
		$this->descrizione = $descrizione;

		return $this;
	}

}

?>