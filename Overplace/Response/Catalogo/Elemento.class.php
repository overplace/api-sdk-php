<?php

namespace Overplace\Response\Catalogo;

/**
 * Class Elemento.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Elemento
 * @namespace   Overplace\Response\Catalogo
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        04/05/2017
 */
class Elemento extends \Overplace\Response
{

	/**
	 * Catalogo element id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Catalogo element status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Catalogo element title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Catalogo element description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Catalogo element type.
	 * Possible value: "alimento", "prodotto".
	 * @access  protected
	 * @var     string
	 */
	protected $tipoProdotto;

	/**
	 * Catalogo element price
	 * @access  protected
	 * @var     float
	 */
	protected $prezzo;

	/**
	 * Catalogo element discount.
	 * If isset use this value instead prezzo for element price.
	 * @access  protected
	 * @var     float
	 */
	protected $sconto;

	/**
	 * Catalogo element unit.
	 * Possible value: "kilo", "etto", "unitario".
	 * @access  protected
	 * @var     string
	 */
	protected $unita;

	/**
	 * Catalogo element link.
	 * @access  protected
	 * @var     string
	 */
	protected $link;

	/**
	 * Catalogo element link type.
	 * Possible value: "scheda", "carrello".
	 * If "scheda" element link is to external page info else if "carrello"
	 * element link is to shop page.
	 * @access  protected
	 * @var     string
	 */
	protected $tipoLink;

	/**
	 * Catalogo element allergens.
	 * @access  protected
	 * @var     array
	 * @example array(0 => "Arachidi", 1 => "Latte" ...)
	 */
	protected $allergeni;

	/**
	 * Catalogo element kcal.
	 * @access  protected
	 * @var     int
	 */
	protected $kcal;

	/**
	 * Catalogo element attachment.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Allegato
	 */
	protected $allegato;

	/**
	 * Catalogo element collection of foto.
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
	 * TipoProdotto getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getTipoProdotto ()
	{
		return $this->tipoProdotto;
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
	 * Sconto getter.
	 * @access  public
	 *
	 * @return  float
	 */
	public function getSconto ()
	{
		return $this->sconto;
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
	 * TipoLink getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getTipoLink ()
	{
		return $this->tipoLink;
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
	 * @return  \Overplace\Collection|\Overplace\Response\Allegato
	 */
	public function getAllegato ()
	{
		return $this->allegato;
	}

	/**
	 * Foto getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Foto
	 */
	public function getFoto ()
	{
		return $this->foto;
	}

}

?>