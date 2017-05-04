<?php

namespace Overplace\Response;

/**
 * Class Wmc.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Wmc
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Wmc extends \Overplace\Response
{

	/**
	 * Wmc id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Wmc status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Wmc type.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Wmc address.
	 * @access  protected
	 * @var     \Overplace\Response\Indirizzo
	 */
	protected $indirizzo;

	/**
	 * Wmc title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Wmc description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Wmc Url Foto Profile.
	 * @access  protected
	 * @var     string
	 */
	protected $fotoProfilo;

	/**
	 * Wmc Url Foto Copertina.
	 * @access  protected
	 * @var     string
	 */
	protected $fotoCopertina;

	/**
	 * Wmc categories. A collection of \Overplace\Response\Categoria
	 * @access  protected
	 * @var     \Overplace\Collection
	 */
	protected $categorie;

	/**
	 * Wmc references.
	 * @access  protected
	 * @var     \Overplace\Response\Riferimenti
	 */
	protected $riferimenti;

	/**
	 * Wmc url youtube video.
	 * @access  protected
	 * @var     string
	 */
	protected $videoYoutube;

	/**
	 * Wmc url Google Maps Virtual Tour for src iframe.
	 * @access  protected
	 * @var     string
	 * @example <iframe src="https://www.google.com/maps/embed?pb=..."></iframe>
	 */
	protected $virtualTour;

	/**
	 * Wmc openhours.
	 * @access  protected
	 * @var     array
	 * @example
	 *  array(
	 *      "lun" => array(
	 *          "apertura" => "continuato",
	 *          "orario" => array("08:00:00","23:00:00","00:00:00","00:00:00")
	 *      ),
	 *      "mer" => array(
	 *          "apertura" => "pausa",
	 *          "orario" => array("08:30:00","12:30:00","15:00:00","19:00:00")
	 *      )
	 *      ...
	 *  )
	 */
	protected $orari;

	/**
	 * Wmc payments accepted.
	 * @access  protected
	 * @var     array
	 * @example array("American express", "Bancomat"...)
	 */
	protected $pagamento;

	/**
	 * Wmc services.
	 * @access  protected
	 * @var     array
	 * @example array("Wifi", "Aria condizionata"...)
	 */
	protected $servizi;

	/**
	 * Wmc services customized.
	 * @access  protected
	 * @var     array("Piscina", "Frigobar"...)
	 */
	protected $serviziCustom;

	/**
	 * Wmc services marchi.
	 * @access  protected
	 * @var     array
	 * @example array("keywords" => array("Social"...), "marchi" => array("Web Agency"...))
	 */
	protected $serviziMarchi;

	/**
	 * Wmc url.
	 * @access  protected
	 * @var     string
	 */
	protected $url;

	/**
	 * Wmc qrcode.
	 * @access  protected
	 * @var     string
	 */
	protected $codice;

	/**
	 * Meta info.
	 * @access  protected
	 * @var     \Overplace\Response\Meta
	 */
	protected $meta;

	/**
	 * Wmc wifi. True if have wifi, false otherwise.
	 * @access  protected
	 * @var     bool
	 */
	protected $wifi;

	/**
	 * Wmc rating
	 * @access  protected
	 * @var     array
	 * @example array("value" => 4, "count" => 150)
	 */
	protected $rating;

	/**
	 * Wmc constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'tipologia' => \Overplace\Response\Tipologia::class,
			'stato' => \Overplace\Response\Tipologia::class,
			'indirizzo' => \Overplace\Response\Indirizzo::class,
			'categorie' => \Overplace\Response\Categoria::class,
			'riferimenti' => \Overplace\Response\Riferimenti::class,
			'meta' => \Overplace\Response\Meta::class
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
	 * Tipologia getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getTipologia ()
	{
		return $this->tipologia;
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
	 * Indirizzo getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Indirizzo
	 */
	public function getIndirizzo ()
	{
		return $this->indirizzo;
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
	 * FotoProfilo getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getFotoProfilo ()
	{
		return $this->fotoProfilo;
	}

	/**
	 * FotoCopertina getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getFotoCopertina ()
	{
		return $this->fotoCopertina;
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

	/**
	 * Riferimenti getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Riferimenti
	 */
	public function getRiferimenti ()
	{
		return $this->riferimenti;
	}

	/**
	 * VideoYoutube getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getVideoYoutube ()
	{
		return $this->videoYoutube;
	}

	/**
	 * VirtualTour getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getVirtualTour ()
	{
		return $this->virtualTour;
	}

	/**
	 * Orari getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getOrari ()
	{
		return $this->orari;
	}

	/**
	 * Pagamento getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getPagamento ()
	{
		return $this->pagamento;
	}

	/**
	 * Servizi getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getServizi ()
	{
		return $this->servizi;
	}

	/**
	 * ServiziCustom getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getServiziCustom ()
	{
		return $this->serviziCustom;
	}

	/**
	 * ServiziMarchi getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getServiziMarchi ()
	{
		return $this->serviziMarchi;
	}

	/**
	 * Url getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getUrl ()
	{
		return $this->url;
	}

	/**
	 * Codice getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCodice ()
	{
		return $this->codice;
	}

	/**
	 * Meta getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Meta
	 */
	public function getMeta ()
	{
		return $this->meta;
	}

	/**
	 * Wifi getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isWifi ()
	{
		return $this->wifi;
	}

	/**
	 * Rating getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRating ()
	{
		return $this->rating;
	}

}

?>