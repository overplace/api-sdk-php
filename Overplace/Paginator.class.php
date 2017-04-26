<?php

namespace Overplace;

/**
 * Class Paginator.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Paginator
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        21/04/2017
 */
class Paginator extends \Overplace\Service
{

	/**
	 * Paging info.
	 * @access  protected
	 * @var     \stdClass
	 */
	protected $page;

	/**
	 * Previous page.
	 * @access  protected
	 * @var     string|null
	 */
	protected $prevPage;

	/**
	 * Current page.
	 * @access  protected
	 * @var     string|null
	 */
	protected $currentPage;

	/**
	 * Next page.
	 * @access  protected
	 * @var     string|null
	 */
	public $nextPage;

	/**
	 * Array of headers request.
	 * @access  private
	 * @var     array
	 */
	private $headers;

	/**
	 * Name of expected class.
	 * @access  private
	 * @var     null|string
	 */
	private $expectedClass;

	/**
	 * Paginator constructor.
	 * @access  public
	 * @param   \Overplace\Client   $client         Client
	 * @param   array               $paginator      Array of paginator.
	 * @param   array               $headers        Array of headers request. [Optional]
	 * @param   string|null         $expectedClass  Class name of expected class. Di default is null. [Optional]
	 */
	public function __construct (\Overplace\Client $client, array $paginator, array $headers = array(), $expectedClass = null)
	{
		parent::__construct($client);
		$this->page = (isset($paginator['page']) && is_array($paginator['page'])) ? (object) $paginator['page'] : new \stdClass();
		$this->prevPage = (isset($paginator['prev']) && !empty($paginator['prev'])) ? $paginator['prev'] : null;
		$this->currentPage = (isset($paginator['current']) && !empty($paginator['current'])) ? $paginator['current'] : null;
		$this->nextPage = (isset($paginator['next']) && !empty($paginator['next'])) ? $paginator['next'] : null;
		$this->headers = $headers;
		$this->expectedClass = $expectedClass;
	}

	/**
	 * Return true if previous page exists, false otherwise.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function hasPrevPage ()
	{
		return isset($this->prevPage);
	}

	/**
	 * Return true if next page exists, false otherwise.
	 * @access  public
	 *
	 * @return  bool
	 */
	public function hasNextPage ()
	{
		return isset($this->nextPage);
	}

	/**
	 * Return page info.
	 * @access  public
	 *
	 * @return  \stdClass
	 */
	public function getPage ()
	{
		return $this->page;
	}

	/**
	 * @return mixed|\Overplace\Collection
	 * @throws \Overplace\Exception\Service
	 */
	public function getPrevPage ()
	{
		$uri = parse_url($this->prevPage, PHP_URL_PATH);
		if (!isset($uri)){
			throw new \Overplace\Exception\Service("");
		}
		$uri = str_replace("/" . \Overplace\Client::DEFAULT_GRAPH_API_VERSION . "/", "", $uri);
		$params = parse_url($this->prevPage, PHP_URL_QUERY);
		$queryParams = array();
		if (isset($params)){
			parse_str($params, $queryParams);
		}
		return $this->request("GET", $uri, $queryParams, $this->headers, $this->expectedClass);
	}

	/**
	 * @return mixed|\Overplace\Collection
	 * @throws \Overplace\Exception\Service
	 */
	public function getCurrentPage ()
	{
		$uri = parse_url($this->currentPage, PHP_URL_PATH);
		if (!isset($uri)){
			throw new \Overplace\Exception\Service("");
		}
		$uri = str_replace("/" . \Overplace\Client::DEFAULT_GRAPH_API_VERSION . "/", "", $uri);
		$params = parse_url($this->currentPage, PHP_URL_QUERY);
		$queryParams = array();
		if (isset($params)){
			parse_str($params, $queryParams);
		}
		return $this->request("GET", $uri, $queryParams, $this->headers, $this->expectedClass);
	}

	/**
	 * @return mixed|\Overplace\Collection
	 * @throws \Overplace\Exception\Service
	 */
	public function getNextPage ()
	{
		$uri = parse_url($this->nextPage, PHP_URL_PATH);
		if (!isset($uri)){
			throw new \Overplace\Exception\Service("");
		}
		$uri = str_replace("/" . \Overplace\Client::DEFAULT_GRAPH_API_VERSION . "/", "", $uri);
		$params = parse_url($this->nextPage, PHP_URL_QUERY);
		$queryParams = array();
		if (isset($params)){
			parse_str($params, $queryParams);
		}
		return $this->request("GET", $uri, $queryParams, $this->headers, $this->expectedClass);
	}

}

?>