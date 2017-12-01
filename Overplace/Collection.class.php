<?php

namespace Overplace;

/**
 * Class Collection.
 *
 * Classe incaricata di gestire le collection di oggetti ritornati dal server.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Collection
 * @namespace   Overplace
 * @package     Overplace
 * @see         \Iterator
 * @see         \Countable
 * @see         \Overplace\Paginator    Controlla e gestisce la paginazione della risposta.
 */
class Collection implements \Iterator, \Countable
{

	/**
	 * Array of Response instances.
	 *
	 * Array contenente instanze della classe \Overplace\Response.
	 *
	 * @access  protected
	 * @var     array
	 */
	protected $data;

	/**
	 * Index of pointer.
	 *
	 * Cursore dell'Iterator.
	 *
	 * @access  protected
	 * @var     int
	 */
	protected $index;

	/**
	 * Count of elements.
	 *
	 * Numero totale degli elementi presenti all'interno della Collection.
	 *
	 * @access  protected
	 * @var     int
	 */
	protected $count;

	/**
	 * Paginator class.
	 *
	 * Instanza della classe Paginator per gestire la paginazione della richiesta.
	 *
	 * @access  protected
	 * @var     \Overplace\Paginator
	 */
	protected $paginator;

	/**
	 * Collection constructor.
	 *
	 * Costruttore della classe Collection.
	 *
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
	 * Count elements of an object.
	 *
	 * The return value is cast to an integer.
	 *
	 * @access  public
	 * @link    http://php.net/manual/en/countable.count.php    Documentazione \Count
	 *
	 * @return  int
	 */
	public function count ()
	{
		return $this->count;
	}

	/**
	 * Return the current element.
	 *
	 * An instance of object that extend \Overplace\Response.
	 *
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.current.php   Documentazione \Iterator::current()
	 *
	 * @return  object
	 */
	public function current ()
	{
		return $this->data[$this->index];
	}

	/**
	 * Move forward to next element.
	 *
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.next.php      Documentazione \Iterator::next()
	 */
	public function next ()
	{
		++$this->index;
	}

	/**
	 * Return the key of the current element.
	 *
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.key.php       Documentazione \Iterator::key()
	 *
	 * @return  int
	 */
	public function key ()
	{
		return $this->index;
	}

	/**
	 * Checks if current position is valid.
	 *
	 * Returns true on success or false on failure.
	 *
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.valid.php     Documentazione \Iterator::valid()
	 *
	 * @return  bool
	 */
	public function valid ()
	{
		return isset($this->data[$this->index]);
	}

	/**
	 * Rewind the Iterator to the first element.
	 *
	 * @access  public
	 * @link    http://php.net/manual/en/iterator.rewind.php    Documentazione \Iterator::rewind()
	 */
	public function rewind ()
	{
		$this->index = 0;
	}

	/**
	 * Verifica se esiste il Paginator.
	 *
	 * Ritorna true se il Paginator esiste, altrimenti false.
	 *
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
	 *
	 * Ritorna l'istanza della classe Paginator.
	 *
	 * @access  public
	 *
	 * @return  \Overplace\Paginator
	 */
	public function getPaginator ()
	{
		return $this->paginator;
	}

	/**
	 * Cast to array.
	 *
	 * Converte l'oggetto Collection in un array e lo ritorna.
	 *
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