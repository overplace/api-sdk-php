<?php

namespace Overplace\Validate;

/**
 * Class Ricette.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ricette
 * @namespace   Overplace\Validate
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
		return array("idScheda");
	}

	/**
	 * Return properties required for get method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForGet ()
	{
		return array("idScheda", "idRicetta");
	}

	/**
	 * Return properties required for create method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForCreate ()
	{
		return array("idScheda", "titolo", "descrizione", "preparazione");
	}

	/**
	 * Return properties required for patch method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForPatch ()
	{
		return array("idScheda", "idRicetta");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idScheda", "idRicetta");
	}

}

?>