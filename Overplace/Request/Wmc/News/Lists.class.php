<?php

namespace Overplace\Request\Wmc\News;

/**
 * Class Lists.
 * Request object for get list of news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\WmcNews
 * @package     Overplace
 * @see         \Overplace\Request\WmcLists
 *
 * Date:        27/04/2017
 */
class Lists extends \Overplace\Request\Lists
{

	const SORT_BY_DATA = 20;

	const SORT_BY_ID = 21;

	const FILTER_BY_STATE = 1;

	const FILTER_BY_NAME = 2;

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
	 * @return  \Overplace\Request\WmcNews\Lists
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

}

?>