<?php

namespace Overplace\Response\Catalogo;

/**
 * Class Categoria.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Categoria
 * @namespace   Overplace\Response\Catalogo
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        04/05/2017
 */
class Categoria extends \Overplace\Response
{

	/**
	 * Catalogo category id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Catalogo category status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Catalogo category title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Catalogo category description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Catalogo category collection of subcategory.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Catalogo\Categoria
	 */
	protected $sottocategorie;

	/**
	 * Catalogo category collection of element.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Catalogo\Elemento
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
			'sottocategorie' => \Overplace\Response\Catalogo\Categoria::class,
			'elementi' => \Overplace\Response\Catalogo\Elemento::class
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
	 * @return  \Overplace\Collection|\Overplace\Response\Catalogo\Categoria
	 */
	public function getSottocategorie ()
	{
		return $this->sottocategorie;
	}

	/**
	 * Elementi getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Catalogo\Elemento
	 */
	public function getElementi ()
	{
		return $this->elementi;
	}

}

?>