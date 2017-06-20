<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Media.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Media
 * @namespace   Overplace\Validate\Wmc
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
		return array("idWmc", "idMedia");
	}

	/**
	 * Return properties required for upload method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForUpload ()
	{
		return array("idWmc", "file");
	}

	/**
	 * Return properties required for patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idWmc", "idMedia");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idWmc", "idMedia");
	}

}

?>