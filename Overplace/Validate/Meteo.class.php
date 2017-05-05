<?php

namespace Overplace\Validate;

/**
 * Class Meteo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Meteo
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        28/04/2017
 */
class Meteo extends \Overplace\Validate
{

	/**
	 * Meteo constructor.
	 * @access  public
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