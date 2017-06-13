<?php

namespace Overplace\Request\Resource;

/**
 * Class Collection.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Collection
 * @namespace   Overplace\Request\Resource
 * @package     Overplace
 *
 * Date:        13/06/2017
 */
class Collection
{

	/**
	 * Collection data.
	 * @access  protected
	 * @var     array
	 */
	protected $data;

	/**
	 * Collection constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		$this->data = array();
	}

	/**
	 * Convert Collection in array.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$data = array();
		$len = count($this->data);
		for ($i = 0; $i < $len; $i++){
			if ($this->data[$i] instanceof \Overplace\Request\Resource || $this->data[$i] instanceof \Overplace\Request\Resource\Collection){
				$data[] = $this->data[$i]->toArray();
			}else {
				$data[] = $this->data[$i];
			}
		}

		return $data;
	}
}

?>