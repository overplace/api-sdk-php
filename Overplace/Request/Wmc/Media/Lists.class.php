<?php

namespace Overplace\Request\Wmc\Media;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\WmcMedia
 * @package     Overplace
 * @see         \Overplace\Request\WmcLists
 *
 * Date:        02/05/2017
 */
class Lists extends \Overplace\Request\Lists
{

	const SORT_BY_DATA = 20;

	const FILTER_BY_STATE = 30;

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
	 * @return  \Overplace\Request\WmcMedia\Lists
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

}

?>