<?php

namespace Overplace\Response;

/**
 * Class Video.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Video
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        02/05/2017
 */
class Video extends \Overplace\Response
{

	/**
	 * Video id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Video status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Video url.
	 * @access  protected
	 * @var     string
	 */
	protected $url;

	/**
	 * Video constructor.
	 * @access  public
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
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