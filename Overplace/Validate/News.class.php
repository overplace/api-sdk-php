<?php

namespace Overplace\Validate;

/**
 * Class News.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @uses        \Overplace\Validate
 *
 * Date:        19/04/2017
 */
class News extends \Overplace\Validate
{

	/**
	 * News constructor.
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
		return array('idScheda');
	}

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array('idScheda', 'idNews');
	}

}

?>