<?php

namespace Overplace\Validate;

/**
 * Class Scheda.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Scheda
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        19/06/2017
 */
class Scheda extends \Overplace\Validate
{

	/**
	 * Scheda constructor.
	 * @access  public
	 * @see     \Overplace\Validate::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("id");
	}

}

?>