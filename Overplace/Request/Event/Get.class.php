<?php

namespace Overplace\Request\Event;

/**
 * Class Get.
 * Request object for get single event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Event
 * @package     Overplace
 * @uses        \Overplace\Request
 *
 * Date:        28/04/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id event.
	 * @access  public
	 * @var     int
	 */
	public $idEvent;

	/**
	 * Get constructor.
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
	 * @return  \Overplace\Request\Event\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdEvent setter.
	 * @access  public
	 * @param   int     $idEvent
	 *
	 * @return  \Overplace\Request\Event\Get
	 */
	public function setIdNews ($idEvent)
	{
		$this->idEvent = $idEvent;

		return $this;
	}

}

?>