<?php

namespace Overplace\Request\Coupon;

/**
 * Class Patch.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Patch
 * @namespace   Overplace\Request\Coupon
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Patch extends \Overplace\Request
{

	/**
	 * Id scheda.
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id coupon.
	 * @access  public
	 * @var     int
	 */
	public $idCoupon;

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
	 * Flag to share coupon on Facebook.
	 * @access  public
	 * @var     bool
	 */
	public $shareOnFacebook;

	/**
	 * Flag to share coupon on Twitter.
	 * @access  public
	 * @var     bool
	 */
	public $shareOnTwitter;

	/**
	 * Patch constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * IdScheda setter.
	 * @access  public
	 * @param   int     $idScheda
	 *
	 * @return  \Overplace\Request\Coupon\Patch
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdCoupon setter.
	 * @access  public
	 * @param   int     $idCoupon
	 *
	 * @return  \Overplace\Request\Coupon\Patch
	 */
	public function setIdCoupon ($idCoupon)
	{
		$this->idCoupon = $idCoupon;

		return $this;
	}

	/**
	 * IdFoto setter.
	 * @access  public
	 * @param   int     $idFoto
	 *
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
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
	 * @return  \Overplace\Request\Coupon\Patch
	 */
	public function setShareOnFacebook ($shareOnFacebook)
	{
		$this->shareOnFacebook = $shareOnFacebook;

		return $this;
	}

	/**
	 * ShareOnTwitter setter.
	 * @access  public
	 * @param   bool    $shareOnTwitter
	 *
	 * @return  \Overplace\Request\Coupon\Patch
	 */
	public function setShareOnTwitter ($shareOnTwitter)
	{
		$this->shareOnTwitter = $shareOnTwitter;

		return $this;
	}

}

?>