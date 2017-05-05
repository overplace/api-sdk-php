<?php

namespace Overplace\Response;

/**
 * Class Catalogo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Catalogo
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        04/05/2017
 */
class Catalogo extends \Overplace\Response
{

	/**
	 * Catalogo id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Catalogo status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Catalogo title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Catalogo description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Catalogo visible flag. If true this catalogue is published, otherwise no.
	 * @access  protected
	 * @var     bool
	 */
	protected $visibile;

	/**
	 * Catalogo paypal flag. If true this wmc and catalogue have paypal configured.
	 * @access  protected
	 * @var     bool
	 */
	protected $paypalAttivo;

	/**
	 * Catalogo collection of Categoria.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Catalogo\Categoria
	 */
	protected $categorie;

	/**
	 * Catalogo constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'categorie' => \Overplace\Response\Catalogo\Categoria::class
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
	 * PaypalAttivo getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isPaypalAttivo ()
	{
		return $this->paypalAttivo;
	}

	/**
	 * Categorie getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Catalogo\Categoria
	 */
	public function getCategorie ()
	{
		return $this->categorie;
	}

}

?>