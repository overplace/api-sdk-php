<?php

namespace Overplace\Request\News;

/**
 * Class Lists.
 * Request object for get list of news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\News
 * @package     Overplace
 * @uses        \Overplace\Request\Lists
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
	 * Lists constructor.
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
	 * @return  \Overplace\Request\News\Lists
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
	 * @return  \Overplace\Request\News\Lists
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
	 * @return  \Overplace\Request\News\Lists
	 */
	public function setLimit ($limit)
	{
		$this->limit = $limit;

		return $this;
	}

}

?>