<?php

namespace Overplace\Response;

/**
 * Class Wmc.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Wmc
 * @namespace   Overplace\Response
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Wmc extends \Overplace\Response
{

	/**
	 * Wmc id.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Wmc typology.
	 * @access  public
	 * @var     \Overplace\Response\Tipologia
	 */
	public $tipologia;

	/**
	 * Wmc status.
	 * @access  public
	 * @var     \Overplace\Response\Tipologia
	 */
	public $stato;

	/**
	 * Wmc address.
	 * @access  public
	 * @var     \Overplace\Response\Indirizzo
	 */
	public $indirizzo;

	/**
	 * Wmc title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Wmc description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Wmc Url Foto Profile.
	 * @access  public
	 * @var     string
	 */
	public $fotoProfilo;

	/**
	 * Wmc Url Foto Copertina.
	 * @access  public
	 * @var     string
	 */
	public $fotoCopertina;

	/**
	 * Wmc categories. A collection of \Overplace\Response\Categoria
	 * @access  public
	 * @var     \Overplace\Collection
	 */
	public $categorie;

	/**
	 * Wmc references.
	 * @access  public
	 * @var     \Overplace\Response\Riferimenti
	 */
	public $riferimenti;

	/**
	 * Wmc url youtube video.
	 * @access  public
	 * @var     string
	 */
	public $videoYoutube;

	/**
	 * Wmc url Google Maps Virtual Tour for src iframe.
	 * @access  public
	 * @var     string
	 * @example <iframe src="https://www.google.com/maps/embed?pb=..."></iframe>
	 */
	public $virtualTour;

	/**
	 * Wmc openhours.
	 * @access  public
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
	public $orari;

	/**
	 * Wmc payments accepted.
	 * @access  public
	 * @var     array
	 * @example array("American express", "Bancomat"...)
	 */
	public $pagamento;

	/**
	 * Wmc services.
	 * @access  public
	 * @var     array
	 * @example array("Wifi", "Aria condizionata"...)
	 */
	public $servizi;

	/**
	 * Wmc services customized.
	 * @access  public
	 * @var     array("Piscina", "Frigobar"...)
	 */
	public $serviziCustom;

	/**
	 * Wmc services marchi.
	 * @access  public
	 * @var     array
	 * @example array("keywords" => array("Social"...), "marchi" => array("Web Agency"...))
	 */
	public $serviziMarchi;

	/**
	 * Wmc url.
	 * @access  public
	 * @var     string
	 */
	public $url;

	/**
	 * Wmc qrcode.
	 * @access  public
	 * @var     string
	 */
	public $codice;

	/**
	 * Meta info.
	 * @access  public
	 * @var     \Overplace\Response\Meta
	 */
	public $meta;

	/**
	 * Wmc wifi. True if have wifi, false otherwise.
	 * @access  public
	 * @var     bool
	 */
	public $wifi;

	/**
	 * Wmc rating
	 * @access  public
	 * @var     array
	 * @example array("value" => 4, "count" => 150)
	 */
	public $rating;

	/**
	 * Wmc constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct([
			'tipologia' => \Overplace\Response\Tipologia::class,
			'stato' => \Overplace\Response\Tipologia::class,
			'indirizzo' => \Overplace\Response\Indirizzo::class,
			'categorie' => \Overplace\Response\Categoria::class,
			'riferimenti' => \Overplace\Response\Riferimenti::class,
			'meta' => \Overplace\Response\Meta::class
		]);
	}

}

?>