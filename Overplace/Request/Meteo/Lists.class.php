<?php

namespace Overplace\Request\Meteo;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Meteo
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        28/04/2017
 */
class Lists extends \Overplace\Request\Lists
{

	/**
	 * Comune
	 * @access  public
	 * @var     string
	 */
	public $comune;

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
	 * Comune setter.
	 * @access  public
	 * @param   string  $comune   Comune
	 *
	 * @return  \Overplace\Request\Meteo\Lists
	 */
	public function setComune ($comune)
	{
		$this->comune = $comune;

		return $this;
	}

}

?>