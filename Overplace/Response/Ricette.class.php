<?php

namespace Overplace\Response;

/**
 * Class Ricette.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ricette
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        02/05/2017
 */
class Ricette extends \Overplace\Response
{

	/**
	 * Recipe id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Recipe status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Recipe title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Recipe description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Recipe preparation instructions.
	 * @access  protected
	 * @var     string
	 */
	protected $preparazione;

	/**
	 * Recipe suggestions.
	 * @access  protected
	 * @var     string
	 */
	protected $consigli;

	/**
	 * Recipe ingredients.
	 * @access  protected
	 * @var     array
	 * @example array(0 => array("nome" => "Acqua", "dose" => "50cl"), 1 => ...)
	 */
	protected $ingredienti;

	/**
	 * Recipe information.
	 * "preparazione" => Recipe preparation time in minutes. 0 if not provided
	 * "cottura" => Recipe cooking time in minutes. 0 if not provided
	 * "dosi" => For how many people is the recipe. 0 if not provided.
	 * "costo" => Indicative price for recipe. Min value: 1, Max value: 5. 0 if not provided.
	 * "difficolta" => Level of difficulty of the recipe. Min value: 1, Max value: 5. 0 if not provided
	 * @access  protected
	 * @var     array
	 * @example array("preparazione" => 90, "cottura" => 20, "dosi" => 1, "costo" => 2, "difficolta" => 3)
	 */
	protected $dati;

	/**
	 * Recipe allergens.
	 * @access  protected
	 * @var     array
	 * @example array(0 => "Arachidi", 1 => "Latte" ...)
	 */
	protected $allergeni;

	/**
	 * Recipe flag visible. If true, recipe is published and visible for users, otherwise is not published
	 * and not visible.
	 * @access  protected
	 * @var     bool
	 */
	protected $visibile;

	/**
	 * Recipe collection of Foto.
	 * @access  protected
	 * @var     \Overplace\Collection
	 */
	protected $foto;

	/**
	 * Recipe attachment.
	 * @access  protected
	 * @var     \Overplace\Response\Allegato
	 */
	protected $allegato;

	/**
	 * Ricetta constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'foto' => \Overplace\Response\Foto::class,
			'allegato' => \Overplace\Response\Allegato::class
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
	 * Preparazione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getPreparazione ()
	{
		return $this->preparazione;
	}

	/**
	 * Consigli getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getConsigli ()
	{
		return $this->consigli;
	}

	/**
	 * Ingredienti getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getIngredienti ()
	{
		return $this->ingredienti;
	}

	/**
	 * Dati getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getDati ()
	{
		return $this->dati;
	}

	/**
	 * Allergeni getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getAllergeni ()
	{
		return $this->allergeni;
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
	 * Foto getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection
	 */
	public function getFoto ()
	{
		return $this->foto;
	}

	/**
	 * Allegato getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Allegato
	 */
	public function getAllegato ()
	{
		return $this->allegato;
	}

}

?>