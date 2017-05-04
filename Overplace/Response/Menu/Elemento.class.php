<?php

namespace Overplace\Response\Menu;

/**
 * Class Elemento.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Elemento
 * @namespace   Overplace\Response\Menu
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        04/05/2017
 */
class Elemento extends \Overplace\Response
{

	/**
	 * Menu Element id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Menu Element status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Menu Element title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Menu Element description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Menu Element price.
	 * @access  protected
	 * @var     float
	 */
	protected $prezzo;

	/**
	 * Menu Element unit.
	 * Possible values: "kilo", "etto", "unitario"
	 * @access  protected
	 * @var     string
	 */
	protected $unita;

	/**
	 * Menu Element external link.
	 * @access  protected
	 * @var     string
	 */
	protected $link;

	/**
	 * Menu Element allergens.
	 * @access  protected
	 * @var     array
	 * @example array(0 => "Arachidi", 1 => "Latte" ...)
	 */
	protected $allergeni;

	/**
	 * Menu Element kcal.
	 * @access  protected
	 * @var     int
	 */
	protected $kcal;

	/**
	 * Menu Element attachment.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Allegato
	 */
	protected $allegato;

	/**
	 * Menu Element collection of foto.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Foto
	 */
	protected $foto;

	/**
	 * Elemento constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'allegato' => \Overplace\Response\Allegato::class,
			'foto' => \Overplace\Response\Foto::class
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
	 * Prezzo getter.
	 * @access  public
	 *
	 * @return  float
	 */
	public function getPrezzo ()
	{
		return $this->prezzo;
	}

	/**
	 * Unita getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getUnita ()
	{
		return $this->unita;
	}

	/**
	 * Link getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getLink ()
	{
		return $this->link;
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
	 * Kcal getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getKcal ()
	{
		return $this->kcal;
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

}

?>