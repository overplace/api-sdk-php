<?php

namespace Overplace\Validate\Scheda;

/**
 * Class Recensioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Recensioni
 * @namespace   Overplace\Validate\Scheda
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        21/06/2017
 */
class Recensioni extends \Overplace\Validate
{

	/**
	 * Recensioni constructor.
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

}

?>