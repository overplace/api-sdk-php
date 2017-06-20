<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Recensioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Recensioni
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        03/05/2017
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
		return array("idWmc");
	}

}

?>