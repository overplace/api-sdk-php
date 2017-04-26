<?php

namespace Overplace\Response;

/**
 * Class Tipologia.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Tipologia
 * @namespace   Overplace\Response
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Tipologia extends \Overplace\Response
{

	/**
	 * Id Tipologia.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Tipologia description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Tipologia constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

}

?>