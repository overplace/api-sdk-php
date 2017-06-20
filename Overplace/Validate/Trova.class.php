<?php

namespace Overplace\Validate;

/**
 * Class Trova.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Trova
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        19/06/2017
 */
class Trova extends \Overplace\Validate
{

	/**
	 * Trova constructor.
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
		return array();
	}

}

?>