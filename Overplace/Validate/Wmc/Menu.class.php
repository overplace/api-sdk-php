<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Menu.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Menu
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        04/05/2017
 */
class Menu extends \Overplace\Validate
{

	/**
	 * Menu constructor.
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

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("idWmc", "idMenu");
	}

}

?>