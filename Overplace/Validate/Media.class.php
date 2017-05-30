<?php

namespace Overplace\Validate;

/**
 * Class Media.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Media
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        17/05/2017
 */
class Media extends \Overplace\Validate
{

	/**
	 * Media constructor.
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

	/**
	 * Return properties required fot get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("idScheda", "idMedia");
	}

	/**
	 * Return properties required fot upload method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForUpload ()
	{
		return array("idScheda", "file");
	}

	/**
	 * Return properties required fot patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idScheda", "idMedia");
	}

	/**
	 * Return properties required fot delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idScheda", "idMedia");
	}

}

?>