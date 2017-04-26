<?php

namespace Overplace\Request;

/**
 * Class NewsList.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        NewsList
 * @namespace   Overplace\Request
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
class NewsList extends \Overplace\Request
{

	const SORT_BY_DATA = 20;

	const SORT_BY_ID = 21;

	const FILTER_BY_STATE = 1;

	const FILTER_BY_NAME = 2;

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Number of page.
	 * Default: 1
	 * @access  public
	 * @var     int
	 */
	public $page;

	/**
	 * Number of post to get in single call.
	 * Max number 50.
	 * Default: 6
	 * @access  public
	 * @var     int
	 */
	public $limit;

	/**
	 * NewsList constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Set id scheda.
	 * @access  public
	 * @param   int     $idScheda   Id scheda
	 *
	 * @return  \Overplace\Request\NewsList
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * Offset setter.
	 * @access  public
	 * @param   int     $page
	 *
	 * @return  \Overplace\Request\NewsList
	 */
	public function setPage ($page)
	{
		$this->page = $page;

		return $this;
	}

	/**
	 * Limit setter.
	 * @access  public
	 * @param   int     $limit
	 *
	 * @return  \Overplace\Request\NewsList
	 */
	public function setLimit ($limit)
	{
		$this->limit = $limit;

		return $this;
	}

}

?>