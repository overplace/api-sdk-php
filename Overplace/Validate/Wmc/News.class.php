<?php

namespace Overplace\Validate\Wmc;

/**
 * Class News.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
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
		return array("idWmc", "idNews");
	}

	/**
	 * Return properties required for create method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForCreate ()
	{
		return array("idWmc", "titolo", "messaggio");
	}

	/**
	 * Return properties required for patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idWmc", "idNews");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idWmc", "idNews");
	}

}

?>