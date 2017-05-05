<?php

namespace Overplace\Response\Menu;

/**
 * Class Categoria.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Categoria
 * @namespace   Overplace\Response\Menu
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        04/05/2017
 */
class Categoria extends \Overplace\Response
{

	/**
	 * Menu Category id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Menu Category status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Menu Category title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Menu Category description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Menu Category collection of Categorie that are subcategory of this category.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Menu\Categoria
	 */
	protected $sottocategorie;

	/**
	 * Menu Category collection of Elemento.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Menu\Elemento
	 */
	protected $elementi;

	/**
	 * Categoria constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'sottocategorie' => \Overplace\Response\Menu\Categoria::class,
			'elementi' => \Overplace\Response\Menu\Elemento::class
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
	 * Sottocategorie getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection
	 */
	public function getSottocategorie ()
	{
		return $this->sottocategorie;
	}

	/**
	 * Elementi getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection
	 */
	public function getElementi ()
	{
		return $this->elementi;
	}

}

?>