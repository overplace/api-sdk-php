<?php

namespace Overplace\Validate;

/**
 * Class Storytelling.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Storytelling
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        02/05/2017
 */
class Storytelling extends \Overplace\Validate
{

	/**
	 * Storytelling constructor.
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