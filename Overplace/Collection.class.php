<?php

namespace Overplace;

/**
 * Class Collection.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Collection
 * @namespace   Overplace
 * @package     Overplace
 * @see         \Iterator
 * @see         \Countable
 * @uses        \Overplace\Paginator
 *
 * Date:        19/04/2017
 */
class Collection implements \Iterator, \Countable
{

	/**
	 * Array of Response instances.
	 * @access  protected
	 * @var     array
	 */
	protected $data;

	/**
	 * Index of pointer.
	 * @access  protected
	 * @var     int
	 */
	protected $index;

	/**
	 * Count of elements.
	 * @access  protected
	 * @var     int
	 */
	protected $count;

	/**
	 * Paginator class.
	 * @access  protected
	 * @var     \Overplace\Paginator
	 */
	protected $paginator;

	/**
	 * Collection constructor.
	 * @access  public
	 * @param   array                       $data       Array of Response.
	 * @param   null|\Overplace\Paginator   $paginator  Paginator class. Default: null. [Optional]
	 */
	public function __construct (array $data, \Overplace\Paginator $paginator = null)
	{
		$this->index = 0;
		$this->data = $data;
		$this->count = count($data);
		$this->paginator = $paginator;
	}

	/**
	 * Count elements of an object
	 * The return value is cast to an integer.
	 * @access  public
	 * @link    http://php.net/manual/en/countable.count.php
	 *
	 * @return  int
	 */
	public function count ()
	{
		return $this->count;
	}

	/**
	 * Return the current element.
	 * An instance of object that extend \Overplace\Response.
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.current.php
	 *
	 * @return  object
	 */
	public function current ()
	{
		return $this->data[$this->index];
	}

	/**
	 * Move forward to next element.
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.next.php
	 */
	public function next ()
	{
		++$this->index;
	}

	/**
	 * Return the key of the current element.
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.key.php
	 *
	 * @return  int
	 */
	public function key ()
	{
		return $this->index;
	}

	/**
	 * Checks if current position is valid.
	 * Returns true on success or false on failure.
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.valid.php
	 *
	 * @return  bool
	 */
	public function valid ()
	{
		return isset($this->data[$this->index]);
	}

	/**
	 * Rewind the Iterator to the first element.
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.rewind.php
	 */
	public function rewind ()
	{
		$this->index = 0;
	}

	/**
	 * Check if present Paginator class.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function hasPaginator ()
	{
		return isset($this->paginator);
	}

	/**
	 * Paginator getter.
	 * @access  public
	 *
	 * @return  \Overplace\Paginator
	 */
	public function getPaginator ()
	{
		return $this->paginator;
	}

	/**
	 * Convert collection object to array with all properties, excluded _map and _message property.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$data = array();
		$len = count($this->data);
		for ($i = 0; $i < $len; $i++){
			if ($this->data[$i] instanceof \Overplace\Response){
				$data[] = $this->data[$i]->toArray();
			}else {
				$data[] = $this->data[$i];
			}
		}

		return $data;
	}

}

?>