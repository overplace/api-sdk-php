<?php

namespace Overplace\Request\Wmc\Coupon;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Wmc\Coupon
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        03/05/2017
 */
class Lists extends \Overplace\Request\Lists
{

	/**
	 * Id wmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Lists constructor.
	 * @access  public
	 * @see     \Overplace\Request\Lists::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * idWmc setter.
	 * @access  public
	 * @param   int     $idWmc   IdWmc
	 *
	 * @return  \Overplace\Request\Wmc\Coupon\Lists
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

}

?>