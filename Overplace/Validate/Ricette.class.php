<?php

namespace Overplace\Validate;

/**
 * Class Ricette.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ricette
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        02/05/2017
 */
class Ricette extends \Overplace\Validate
{

	/**
	 * Ricette constructor.
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