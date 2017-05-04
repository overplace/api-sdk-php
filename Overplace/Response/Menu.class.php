<?php

namespace Overplace\Response;

/**
 * Class Menu.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Menu
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        04/05/2017
 */
class Menu extends \Overplace\Response
{

	/**
	 * Menu id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Menu status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Menu title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Menu description
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Menu visible flag. If true menu is published, otherwise no.
	 * @access  protected
	 * @var     bool
	 */
	protected $visibile;

	/**
	 * Menu collection of Categoria.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Categoria
	 */
	protected $categorie;

	/**
	 * Menu constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'categorie' => \Overplace\Response\Menu\Categoria::class
		));
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
	 * Stato getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getStato ()
	{
		return $this->stato;
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
	 * Visibile getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isVisibile ()
	{
		return $this->visibile;
	}

	/**
	 * Categorie getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection
	 */
	public function getCategorie ()
	{
		return $this->categorie;
	}

}

?>