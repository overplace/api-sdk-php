<?php

namespace Overplace\Validate\Scheda;

/**
 * Class Event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Validate\Scheda
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        20/06/2017
 */
class Event extends \Overplace\Validate
{

	/**
	 * Event constructor.
	 * @access  public
	 * @see     \Overplace\Validate::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return properties required for getList method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForList ()
	{
		return array("idScheda");
	}

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("idScheda", "idEvent");
	}

}

?>