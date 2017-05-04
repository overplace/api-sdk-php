<?php

namespace Overplace\Response;

/**
 * Class Foto.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Foto
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Foto extends \Overplace\Response
{

	/**
	 * Foto Id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Foto status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Tipologia Foto.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Foto title.
	 * @access  protected
	 * @var     string
	 */
	protected $titolo;

	/**
	 * Foto alt.
	 * @access  protected
	 * @var     string
	 */
	protected $alt;

	/**
	 * Foto url.
	 * @access  protected
	 * @var     string
	 */
	protected $url;

	/**
	 * Foto constructor.
	 * @access  public
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'tipologia' => \Overplace\Response\Tipologia::class,
			'stato' => \Overplace\Response\Tipologia::class
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
	 * Tipologia getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getTipologia ()
	{
		return $this->tipologia;
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
	 * Alt getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getAlt ()
	{
		return $this->alt;
	}

	/**
	 * Url getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getUrl ()
	{
		return $this->url;
	}

}

?>