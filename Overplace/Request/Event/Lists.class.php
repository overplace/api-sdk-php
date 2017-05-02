<?php

namespace Overplace\Request\Event;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Event
 * @package     Overplace
 * @uses        \Overplace\Request\Lists
 *
 * Date:        28/04/2017
 */
class Lists extends \Overplace\Request\Lists
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Lists constructor.
	 * @access  public
	 * @see     \Overplace\Request\Lists
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Set id scheda.
	 * @access  public
	 * @param   int     $idScheda   Id scheda
	 *
	 * @return  \Overplace\Request\Event\Lists
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

}

?>