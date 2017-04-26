<?php

namespace Overplace\Request;

/**
 * Class WmcGet.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        WmcGet
 * @namespace   Overplace\Request
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class WmcGet extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * WmcGet constructor.
	 * @access  public
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
	 * @return  \Overplace\Request\WmcGet
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

}

?>