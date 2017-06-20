<?php

namespace Overplace\Request\Wmc\Coupon;

/**
 * Class Create.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Create
 * @namespace   Overplace\Request\Wmc\Coupon
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Create extends \Overplace\Request
{

	/**
	 * Id wmc.
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Coupon id foto.
	 * @access  public
	 * @var     int
	 */
	public $idFoto;

	/**
	 * Coupon id email template.
	 * @access  public
	 * @var     int
	 */
	public $idEmailTemplate;

	/**
	 * Coupon title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Coupon description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Coupon value.
	 * @access  public
	 * @var     string
	 */
	public $sconto;

	/**
	 * Requirements for getting the coupon.
	 * @access  public
	 * @var     string
	 */
	public $condizioniLegali;

	/**
	 * The number of coupons that can be disbursed.
	 * Ignore if set illimitati to true.
	 * @access  public
	 * @var     int
	 */
	public $numeroErogabili;

	/**
	 * Flag unlimited coupon.
	 * The number of coupons that can be delivered is unlimited.
	 * @access  public
	 * @var     bool
	 */
	public $illimitati;

	/**
	 * Coupon start date in ISO 8601.
	 * @access  public
	 * @var     string
	 */
	public $dataInizioErogazione;

	/**
	 * Coupon end date in ISO 8601.
	 * Must be greater than start date +2 days at least and +30 days at most.
	 * @access  public
	 * @var     string
	 */
	public $dataFineErogazione;

	/**
	 * Flag to share coupon on facebook.
	 * @access  public
	 * @var     bool
	 */
	public $shareOnFacebook;

	/**
	 * Create constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * idWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdFoto setter.
	 * @access  public
	 * @param   int     $idFoto
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setIdFoto ($idFoto)
	{
		$this->idFoto = $idFoto;

		return $this;
	}

	/**
	 * IdEmailTemplate setter.
	 * @access  public
	 * @param   int     $idEmailTemplate
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setIdEmailTemplate ($idEmailTemplate)
	{
		$this->idEmailTemplate = $idEmailTemplate;

		return $this;
	}

	/**
	 * Titolo setter.
	 * @access  public
	 * @param   string  $titolo
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setTitolo ($titolo)
	{
		$this->titolo = $titolo;

		return $this;
	}

	/**
	 * Descrizione setter.
	 * @access  public
	 * @param   string  $descrizione
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setDescrizione ($descrizione)
	{
		$this->descrizione = $descrizione;

		return $this;
	}

	/**
	 * Sconto setter.
	 * @access  public
	 * @param   string  $sconto
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setSconto ($sconto)
	{
		$this->sconto = $sconto;

		return $this;
	}

	/**
	 * CondizioniLegali setter.
	 * @access  public
	 * @param   string  $condizioniLegali
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setCondizioniLegali ($condizioniLegali)
	{
		$this->condizioniLegali = $condizioniLegali;

		return $this;
	}

	/**
	 * NumeroErogabili setter.
	 * @access  public
	 * @param   int     $numeroErogabili
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setNumeroErogabili ($numeroErogabili)
	{
		$this->numeroErogabili = $numeroErogabili;

		return $this;
	}

	/**
	 * Illimitati setter.
	 * @access  public
	 * @param   bool    $illimitati
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setIllimitati ($illimitati)
	{
		$this->illimitati = $illimitati;

		return $this;
	}

	/**
	 * DataInizioErogazione setter.
	 * @access  public
	 * @param   string  $dataInizioErogazione
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setDataInizioErogazione ($dataInizioErogazione)
	{
		$this->dataInizioErogazione = $dataInizioErogazione;

		return $this;
	}

	/**
	 * DataFineErogazione setter.
	 * @access  public
	 * @param   string  $dataFineErogazione
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setDataFineErogazione ($dataFineErogazione)
	{
		$this->dataFineErogazione = $dataFineErogazione;

		return $this;
	}

	/**
	 * ShareOnFacebook setter.
	 * @access  public
	 * @param   bool    $shareOnFacebook
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Create
	 */
	public function setShareOnFacebook ($shareOnFacebook)
	{
		$this->shareOnFacebook = $shareOnFacebook;

		return $this;
	}

}

?>