<?php

namespace Overplace\Request\Wmc\Gallery;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Wmc\Gallery
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        02/05/2017
 */
class Lists extends \Overplace\Request\Lists
{

	/**
	 * IdWmc
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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc   IdWmc
	 *
	 * @return  \Overplace\Request\Wmc\Gallery\Lists
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

}

?>