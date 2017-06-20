<?php

namespace Overplace\Request\Wmc\Event;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Wmc\Event
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        07/06/2017
 */
class Delete extends \Overplace\Request
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
	 * Delete constructor.
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
	 * @return  \Overplace\Request\Wmc\Event\Delete
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
	 * @return  \Overplace\Request\Wmc\Event\Delete
	 */
	public function setIdEvent ($idEvent)
	{
		$this->idEvent = $idEvent;

		return $this;
	}

}

?>