<?php

namespace Overplace\Validate;

/**
 * Class Statistiche.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Statistiche
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        08/05/2017
 */
class Statistiche extends \Overplace\Validate
{

	/**
	 * Statistiche constructor.
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