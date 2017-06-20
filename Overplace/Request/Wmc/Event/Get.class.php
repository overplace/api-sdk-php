<?php

namespace Overplace\Request\Wmc\Event;

/**
 * Class Get.
 * Request object for get single event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Event
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        28/04/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * IdWmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Event\Get
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdEvent setter.
	 * @access  public
	 * @param   int     $idEvent
	 *
	 * @return  \Overplace\Request\Wmc\Event\Get
	 */
	public function setIdEvent ($idEvent)
	{
		$this->idEvent = $idEvent;

		return $this;
	}

}

?>