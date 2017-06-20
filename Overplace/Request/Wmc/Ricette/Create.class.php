<?php

namespace Overplace\Request\Wmc\Ricette;

/**
 * Class Create.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Create
 * @namespace   Overplace\Request\Wmc\Ricette
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        13/06/2017
 */
class Create extends \Overplace\Request
{
	/**
	 * IdWmc.
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Recipe title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Recipe description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Recipe preparation
	 * @access  public
	 * @var     string
	 */
	public $preparazione;

	/**
	 * Recipe advice.
	 * @access  public
	 * @var     string
	 */
	public $consigli;

	/**
	 * Recipe ingredients list.
	 * @access  public
	 * @var     array|\Overplace\Request\Resource\Ricette\Ingredienti
	 */
	public $ingredienti;

	/**
	 * Recipe specific information.
	 * @access  public
	 * @var     array|\Overplace\Request\Resource\Ricette\Dati
	 */
	public $dati;

	/**
	 * Recipe allergeni list.
	 * @access  public
	 * @var     array|\Overplace\Request\Resource\Allergeni
	 */
	public $allergeni;

	/**
	 * Recipe flag visible. If true, recipe is published and visible for users, otherwise is not published
	 * and not visible.
	 * @access  public
	 * @var     bool
	 */
	public $visibile;

	/**
	 * Recipe foto.
	 * @access  public
	 * @var     array
	 */
	public $foto;

	/**
	 * Recipe attachment.
	 * @access  public
	 * @var     int
	 */
	public $allegato;

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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * Titolo setter.
	 * @access  public
	 * @param   string  $titolo
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
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
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setDescrizione ($descrizione)
	{
		$this->descrizione = $descrizione;

		return $this;
	}

	/**
	 * Preparazione setter.
	 * @access  public
	 * @param   string  $preparazione
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setPreparazione ($preparazione)
	{
		$this->preparazione = $preparazione;

		return $this;
	}

	/**
	 * Consigli setter.
	 * @access  public
	 * @param   string  $consigli
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setConsigli ($consigli)
	{
		$this->consigli = $consigli;

		return $this;
	}

	/**
	 * Ingredienti setter.
	 * @access  public
	 * @param   array|\Overplace\Request\Resource\Ricette\Ingredienti   $ingredienti
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setIngredienti ($ingredienti)
	{
		$this->ingredienti = $ingredienti;

		return $this;
	}

	/**
	 * Dati setter.
	 * @access  public
	 * @param   array|\Overplace\Request\Resource\Ricette\Dati  $dati
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setDati ($dati)
	{
		$this->dati = $dati;

		return $this;
	}

	/**
	 * Allergeni setter.
	 * @access  public
	 * @param   array|\Overplace\Request\Resource\Allergeni     $allergeni
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setAllergeni ($allergeni)
	{
		$this->allergeni = $allergeni;

		return $this;
	}

	/**
	 * Visibile setter.
	 * @access  public
	 * @param   bool    $visibile
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setVisibile ($visibile)
	{
		$this->visibile = $visibile;

		return $this;
	}

	/**
	 * Foto setter.
	 * @access  public
	 * @param   array   $foto
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setFoto ($foto)
	{
		$this->foto = $foto;

		return $this;
	}

	/**
	 * Allegato setter.
	 * @access  public
	 * @param   int     $allegato
	 *
	 * @return  \Overplace\Request\Wmc\Ricette\Create
	 */
	public function setAllegato ($allegato)
	{
		$this->allegato = $allegato;

		return $this;
	}

}

?>