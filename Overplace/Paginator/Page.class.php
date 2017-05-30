<?php

namespace Overplace\Paginator;

/**
 * Class Page.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Page
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        17/05/2017
 */
class Page
{

	/**
	 * Number of first page.
	 * @access  protected
	 * @see     \Overplace\Paginator\Page::getFirst()
	 * @var     int
	 */
	protected $first;

	/**
	 * Number of previous page.
	 * @access  protected
	 * @see     \Overplace\Paginator\Page::getPrev()
	 * @var     int
	 */
	protected $prev;

	/**
	 * Number of current page.
	 * @access  protected
	 * @see     \Overplace\Paginator\Page::getCurrent()
	 * @var     int
	 */
	protected $current;

	/**
	 * Number of next page.
	 * @access  protected
	 * @see     \Overplace\Paginator\Page::getNext();
	 * @var     int
	 */
	protected $next;

	/**
	 * Number of last page.
	 * @access  protected
	 * @see     \Overplace\Paginator\Page::getLast()
	 * @var     int
	 */
	protected $last;

	/**
	 * Page constructor.
	 * @access  public
	 * @param   \stdClass   $page
	 */
	public function __construct (\stdClass $page)
	{
		$this->first = (isset($page->first) && !empty($page->first) && is_numeric($page->first)) ? (int) $page->first : null;
		$this->prev = (isset($page->prev) && !empty($page->prev) && is_numeric($page->prev)) ? (int) $page->prev : null;
		$this->current = (isset($page->current) && !empty($page->current) && is_numeric($page->current)) ? (int) $page->current : null;
		$this->next = (isset($page->next) && !empty($page->next) && is_numeric($page->next)) ? (int) $page->next : null;
		$this->last = (isset($page->last) && !empty($page->last) && is_numeric($page->last)) ? (int) $page->last : null;
	}

	/**
	 * First getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getFirst ()
	{
		return $this->first;
	}

	/**
	 * Prev getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getPrev ()
	{
		return $this->prev;
	}

	/**
	 * Current getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getCurrent ()
	{
		return $this->current;
	}

	/**
	 * Next getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getNext ()
	{
		return $this->next;
	}

	/**
	 * Last getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getLast ()
	{
		return $this->last;
	}

}

?>