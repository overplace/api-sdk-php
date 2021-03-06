<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Gallery.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Gallery
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        02/05/2017
 */
class Gallery extends \Overplace\Validate
{

	/**
	 * Gallery constructor.
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