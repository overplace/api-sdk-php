<?php

namespace Overplace\Response;

/**
 * Class Storytelling.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Storytelling
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        02/05/2017
 */
class Storytelling extends \Overplace\Response
{

	/**
	 * Story id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Story status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Story preview image.
	 * @access  protected
	 * @var     \Overplace\Response\Foto
	 */
	protected $anteprima;

	/**
	 * Story title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Story text.
	 * @access  protected
	 * @var     string
	 */
	protected $descrizione;

	/**
	 * A collection of foto for this story.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Foto
	 */
	protected $foto;

	/**
	 * A collection of video for this story.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Video
	 */
	protected $video;

	/**
	 * Storytelling constructor.
	 * @access  public
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'tipologia' => \Overplace\Response\Tipologia::class,
			'stato' => \Overplace\Response\Tipologia::class,
			'anteprima' => \Overplace\Response\Foto::class,
			'foto' => \Overplace\Response\Foto::class,
			'video' => \Overplace\Response\Video::class
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
	 * Anteprima getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function getAnteprima ()
	{
		return $this->anteprima;
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
	 * Foto getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Foto
	 */
	public function getFoto ()
	{
		return $this->foto;
	}

	/**
	 * Video getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Video
	 */
	public function getVideo ()
	{
		return $this->video;
	}

}

?>