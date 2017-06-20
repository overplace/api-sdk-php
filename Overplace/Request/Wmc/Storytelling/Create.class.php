<?php

namespace Overplace\Request\Wmc\Storytelling;

/**
 * Class Create.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Create
 * @namespace   Overplace\Request\Wmc\Storytelling
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Create extends \Overplace\Request
{

	/**
	 * IdWmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Title story.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Description story.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Id photo preview of story.
	 * If set must be in foto list too.
	 * @access  public
	 * @var     int
	 */
	public $idFotoAnteprima;

	/**
	 * A list of id photo.
	 * @access  public
	 * @var     array
	 */
	public $foto;

	/**
	 * A list of youtube url.
	 * @access  public
	 * @var     array
	 */
	public $video;

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
	 * @return  \Overplace\Request\Wmc\Storytelling\Create
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
	 * @return  \Overplace\Request\Wmc\Storytelling\Create
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
	 * @return  \Overplace\Request\Wmc\Storytelling\Create
	 */
	public function setDescrizione ($descrizione)
	{
		$this->descrizione = $descrizione;

		return $this;
	}

	/**
	 * IdFotoAnteprima setter.
	 * @access  public
	 * @param   int   $idFotoAnteprima
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Create
	 */
	public function setIdFotoAnteprima ($idFotoAnteprima)
	{
		$this->idFotoAnteprima = $idFotoAnteprima;

		return $this;
	}

	/**
	 * Foto setter.
	 * @access  public
	 * @param   array   $foto
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Create
	 */
	public function setFoto ($foto)
	{
		$this->foto = $foto;

		return $this;
	}

	/**
	 * Video setter.
	 * @access  public
	 * @param   array   $video
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Create
	 */
	public function setVideo ($video)
	{
		$this->video = $video;

		return $this;
	}

}

?>