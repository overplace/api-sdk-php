<?php

namespace Overplace\Request\Event;

/**
 * Class Create.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Create
 * @namespace   Overplace\Request\Event
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        07/06/2017
 */
class Create extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

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
	 * Create constructor.
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
	 * @return  \Overplace\Request\Event\Create
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdFoto setter.
	 * @access  public
	 * @param   int     $idFoto
	 *
	 * @return  \Overplace\Request\Event\Create
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
	 * @return  \Overplace\Request\Event\Create
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
	 * @return  \Overplace\Request\Event\Create
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
	 * @return  \Overplace\Request\Event\Create
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
	 * @return  \Overplace\Request\Event\Create
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
	 * @return  \Overplace\Request\Event\Create
	 */
	public function setShareOnTwitter ($shareOnTwitter)
	{
		$this->shareOnTwitter = $shareOnTwitter;

		return $this;
	}

}

?>