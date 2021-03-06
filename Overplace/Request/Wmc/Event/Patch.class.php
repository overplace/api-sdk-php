<?php

namespace Overplace\Request\Wmc\Event;

/**
 * Class Patch.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Patch
 * @namespace   Overplace\Request\Wmc\Event
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        07/06/2017
 */
class Patch extends \Overplace\Request
{

	/**
	 * IdWmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Id event.
	 * @access  public
	 * @var     int
	 */
	public $idEvent;

	/**
	 * Id foto.
	 * @access  public
	 * @var     int
	 */
	public $idFoto;

	/**
	 * Event title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Event description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Event start datetime.
	 * @access  public
	 * @var     string
	 */
	public $dataInizioEvento;

	/**
	 * Event end datetime.
	 * @access  public
	 * @var     string
	 */
	public $dataFineEvento;

	/**
	 * Flag to share event on Twitter.
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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdEvent setter.
	 * @access  public
	 * @param   int     $idEvent
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setIdEvent ($idEvent)
	{
		$this->idEvent = $idEvent;

		return $this;
	}

	/**
	 * IdFoto setter.
	 * @access  public
	 * @param   int     $idFoto
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setIdFoto ($idFoto)
	{
		$this->idFoto = $idFoto;

		return $this;
	}

	/**
	 * Titolo setter.
	 * @access  public
	 * @param   string  $titolo
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
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
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setDescrizione ($descrizione)
	{
		$this->descrizione = $descrizione;

		return $this;
	}

	/**
	 * DataInizioEvento setter.
	 * @access  public
	 * @param   string  $dataInizioEvento
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setDataInizioEvento ($dataInizioEvento)
	{
		$this->dataInizioEvento = $dataInizioEvento;

		return $this;
	}

	/**
	 * DataFineEvento setter.
	 * @access  public
	 * @param   string  $dataFineEvento
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setDataFineEvento ($dataFineEvento)
	{
		$this->dataFineEvento = $dataFineEvento;

		return $this;
	}

	/**
	 * ShareOnTwitter setter.
	 * @access  public
	 * @param   bool    $shareOnTwitter
	 *
	 * @return  \Overplace\Request\Wmc\Event\Patch
	 */
	public function setShareOnTwitter ($shareOnTwitter)
	{
		$this->shareOnTwitter = $shareOnTwitter;

		return $this;
	}

}

?>