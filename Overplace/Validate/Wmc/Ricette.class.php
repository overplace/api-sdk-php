<?php

namespace Overplace\Validate\Wmc;

/**
 * Class Ricette.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ricette
 * @namespace   Overplace\Validate\Wmc
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        02/05/2017
 */
class Ricette extends \Overplace\Validate
{

	/**
	 * Ricette constructor.
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
		return array("idWmc", "idRicetta");
	}

	/**
	 * Return properties required for create method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForCreate ()
	{
		return array("idWmc", "titolo", "descrizione", "preparazione");
	}

	/**
	 * Return properties required for patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idWmc", "idRicetta");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idWmc", "idRicetta");
	}

}

?>