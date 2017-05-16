<?php

namespace Overplace\Response;

/**
 * Class Statistiche.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Statistiche
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        08/05/2017
 */
class Statistiche extends \Overplace\Response
{

	/**
	 * Statistiche Views objects.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Statistiche\Views
	 */
	protected $views;

	/**
	 * Statistiche Events objects.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Statistiche\Event
	 */
	protected $event;

	/**
	 * Statistiche Interazioni objects.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Statistiche\Interazioni
	 */
	protected $interazioni;

	/**
	 * Statistiche Google My Business objects.
	 * @access  protected
	 * @var     \Overplace\Collection|\Overplace\Response\Statistiche\GoogleMyBusiness
	 */
	protected $googleMyBusiness;

	/**
	 * Statistiche constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'views' => \Overplace\Response\Statistiche\Views::class,
			'event' => \Overplace\Response\Statistiche\Event::class,
			'interazioni' => \Overplace\Response\Statistiche\Interazioni::class,
			'googleMyBusiness' => \Overplace\Response\Statistiche\GoogleMyBusiness::class
		));
	}

	/**
	 * Views getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Statistiche\Views
	 */
	public function getViews ()
	{
		return $this->views;
	}

	/**
	 * Event getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Statistiche\Event
	 */
	public function getEvent ()
	{
		return $this->event;
	}

	/**
	 * Interazioni getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Statistiche\Interazioni
	 */
	public function getInterazioni ()
	{
		return $this->interazioni;
	}

	/**
	 * GoogleMyBusiness getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection|\Overplace\Response\Statistiche\GoogleMyBusiness
	 */
	public function getGoogleMyBusiness ()
	{
		return $this->googleMyBusiness;
	}

}

?>