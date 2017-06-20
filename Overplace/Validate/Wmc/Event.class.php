<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        28/04/2017
 */
class Event extends \Overplace\Validate
{

	/**
	 * Eventi constructor.
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
		return array("idWmc", "idEvent");
	}

	/**
	 * Return properties required for create method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForCreate ()
	{
		return array("idWmc", "titolo", "descrizione", "dataInizioEvento", "dataFineEvento");
	}

	/**
	 * Return properties required for patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idWmc", "idEvent");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idWmc", "idEvent");
	}

}

?>