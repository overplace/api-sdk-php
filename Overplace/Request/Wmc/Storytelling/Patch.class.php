<?php

namespace Overplace\Request\Wmc\Storytelling;

/**
 * Class Patch.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Patch
 * @namespace   Overplace\Request\Wmc\Storytelling
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
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
	 * Id story.
	 * @access  public
	 * @var     int
	 */
	public $idStory;

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
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdStory setter.
	 * @access  public
	 * @param   int     $idStory
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
	 */
	public function setIdStory ($idStory)
	{
		$this->idStory = $idStory;

		return $this;
	}

	/**
	 * Titolo setter.
	 * @access  public
	 * @param   string  $titolo
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
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
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
	 */
	public function setDescrizione ($descrizione)
	{
		$this->descrizione = $descrizione;

		return $this;
	}

	/**
	 * IdFotoAnteprima setter.
	 * @access  public
	 * @param   int     $idFotoAnteprima
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
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
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
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
	 * @return  \Overplace\Request\Wmc\Storytelling\Patch
	 */
	public function setVideo ($video)
	{
		$this->video = $video;

		return $this;
	}

}

?>