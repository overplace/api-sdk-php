<?php

namespace Overplace\Request\Wmc\Catalogo;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request\Wmc\Catalogo
 * @package     Overplace
 * @see         \Overplace\Request\Lists
 *
 * Date:        04/05/2017
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
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc   Id wmc
	 *
	 * @return  \Overplace\Request\Wmc\Catalogo\Lists
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

}

?>