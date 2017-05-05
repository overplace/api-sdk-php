<?php

namespace Overplace\Response;

/**
 * Class Coupon.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Coupon
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        03/05/2017
 */
class Coupon extends \Overplace\Response
{

	/**
	 * Coupon id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Coupon status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Coupon title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Coupon description.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * Coupon value.
	 * @access  protected
	 * @var     string
	 */
	protected $sconto;

	/**
	 * Coupon legal condition.
	 * @access  protected
	 * @var     string
	 */
	protected $condizioniLegali;

	/**
	 * Number of Coupon distributable.
	 * @access  protected
	 * @var     int
	 */
	protected $numeroErogabili;

	/**
	 * Number of Coupon distributed.
	 * @access  protected
	 * @var     int
	 */
	protected $numeroErogati;

	/**
	 * Coupon unlimited flag.
	 * If true number of Coupon distributable is unlimited and $numeroErogabili
	 * must be ignored, otherwise take $numeroErogabili value.
	 * @access  protected
	 * @var     bool
	 */
	protected $illimitati;

	/**
	 * Coupon flag send with email campain.
	 * @access  protected
	 * @var     bool
	 */
	protected $inviaCampagna;

	/**
	 * Coupon start date.
	 * If $inviaCampagna is true this date is postponed one day because first day is
	 * reserved for users that receive email campain.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizioErogazione;

	/**
	 * Coupon end date.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFineErogazione;

	/**
	 * Coupon foto.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Foto
	 */
	protected $foto;

	/**
	 * Coupon constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
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
	 * Sconto getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getSconto ()
	{
		return $this->sconto;
	}

	/**
	 * CondizioniLegali getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCondizioniLegali ()
	{
		return $this->condizioniLegali;
	}

	/**
	 * NumeroErogabili getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getNumeroErogabili ()
	{
		return $this->numeroErogabili;
	}

	/**
	 * NumeroErogati getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getNumeroErogati ()
	{
		return $this->numeroErogati;
	}

	/**
	 * Illimitati getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isIllimitati ()
	{
		return $this->illimitati;
	}

	/**
	 * InviaCampagna getter.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function isInviaCampagna ()
	{
		return $this->inviaCampagna;
	}

	/**
	 * DataInizioErogazione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataInizioErogazione ()
	{
		return $this->dataInizioErogazione;
	}

	/**
	 * DataFineErogazione getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataFineErogazione ()
	{
		return $this->dataFineErogazione;
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