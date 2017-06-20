<?php

namespace Overplace\Request\Scheda;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Scheda
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        19/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id scheda.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Get constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Id setter.
	 * @access  public
	 * @param   int     $id
	 *
	 * @return  \Overplace\Request\Scheda\Get
	 */
	public function setId ($id)
	{
		$this->id = $id;

		return $this;
	}

}

?>