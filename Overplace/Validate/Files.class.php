<?php

namespace Overplace\Validate;

/**
 * Class Files.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Files
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        14/06/2017
 */
class Files extends \Overplace\Validate
{

	/**
	 * Files constructor.
	 * @access  public
	 * @see     \Overplace\Validate::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return properties required fot upload method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForUpload ()
	{
		return array("idScheda", "filename", "idTipologia");
	}

}

?>