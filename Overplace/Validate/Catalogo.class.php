<?php

namespace Overplace\Validate;

/**
 * Class Catalogo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Catalogo
 * @namespace   Overplace\Validate
 * @package     Overplace
 * @see         \Overplace\Validate
 *
 * Date:        05/05/2017
 */
class Catalogo extends \Overplace\Validate
{

	/**
	 * Catalogo constructor.
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
		return array("idScheda", "idCatalogo");
	}

	/**
	 * Return properties required for delete method.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getRequiredForDelete ()
	{
		return array("idScheda", "idCatalogo");
	}
}

?>