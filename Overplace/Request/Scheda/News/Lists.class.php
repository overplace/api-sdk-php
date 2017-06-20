<?php

namespace Overplace\Request\Scheda\News;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Scheda\News
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        20/06/2017
 */
class Lists extends \Overplace\Request\Lists
{

	/**
	 * Id Scheda.
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
	 * @param   int     $idScheda   Id scheda.
	 *
	 * @return  \Overplace\Request\Scheda\News\Lists
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

}

?>