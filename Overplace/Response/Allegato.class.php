<?php

namespace Overplace\Response;

/**
 * Class Allegato.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Allegato
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        02/05/2017
 */
class Allegato extends \Overplace\Response
{

	/**
	 * Allegato id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Allegato status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Allegato type.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Allegato url.
	 * @access  protected
	 * @var     string
	 */
	protected $url;

	/**
	 * Allegato constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'tipologia' => \Overplace\Response\Tipologia::class
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