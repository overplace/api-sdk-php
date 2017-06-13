<?php

namespace Overplace\Request\Resource;

/**
 * Class Allergeni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Allergeni
 * @namespace   Overplace\Request\Resource
 * @package     Overplace
 * @see         \Overplace\Request\Resource\Collection
 *
 * Date:        13/06/2017
 */
class Allergeni extends \Overplace\Request\Resource\Collection
{

	/**
	 * Allergeni constructor.
	 * @access  public
	 * @see     \Overplace\Request\Resource\Collection::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Add Allergene.
	 * @access  public
	 * @param   \Overplace\Request\Resource\Allergene   $allergene
	 *
	 * @return  \Overplace\Request\Resource\Allergeni
	 */
	public function add (\Overplace\Request\Resource\Allergene $allergene)
	{
		$this->data[] = $allergene;

		return $this;
	}

}

?>