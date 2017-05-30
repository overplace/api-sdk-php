<?php

namespace Overplace\Request\Media;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Media
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        02/05/2017
 */
class Lists extends \Overplace\Request\Lists
{

	const SORT_BY_DATA = 20;

	const FILTER_BY_STATE = 30;

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

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
	 * IdScheda setter.
	 * @access  public
	 * @param   int     $idScheda   Id scheda
	 *
	 * @return  \Overplace\Request\Media\Lists
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

}

?>