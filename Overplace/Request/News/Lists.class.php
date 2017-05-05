<?php

namespace Overplace\Request\News;

/**
 * Class Lists.
 * Request object for get list of news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\News
 * @package     Overplace
 * @see         \Overplace\Request\Lists
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

}

?>