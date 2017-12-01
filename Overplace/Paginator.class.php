<?php

namespace Overplace;

/**
 * Class Paginator.
 *
 * Classe incaricata per gestire la paginazione delle chiamate al server.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Paginator
 * @namespace   Overplace
 * @package     Overplace
 * @see         \Overplace\Service
 */
class Paginator extends \Overplace\Service
{

	/**
	 * Paging info.
	 *
	 * Istanza della classe Page.
	 *
	 * @access  protected
	 * @see     \Overplace\Paginator\Page
	 * @var     \Overplace\Paginator\Page
	 */
	protected $page;

	/**
	 * Previous page.
	 *
	 * Url della pagina precedente.
	 *
	 * @access  protected
	 * @var     string|null
	 */
	protected $prevPage;

	/**
	 * Current page.
	 *
	 * Url della pagina corrente.
	 *
	 * @access  protected
	 * @var     string|null
	 */
	protected $currentPage;

	/**
	 * Next page.
	 *
	 * Url della pagina successiva.
	 *
	 * @access  protected
	 * @var     string|null
	 */
	protected $nextPage;

	/**
	 * Headers request.
	 *
	 * Array contenente gli header da inviare nella richiesta.
	 *
	 * @access  private
	 * @var     array
	 */
	private $headers;

	/**
	 * Expected class.
	 *
	 * Nome della classe aspettata nella response del server.
	 *
	 * @access  private
	 * @var     null|string
	 */
	private $expectedClass;

	/**
	 * Paginator constructor.
	 *
	 * Costruttore della classe Paginator.
	 *
	 * @access  public
	 * @param   \Overplace\Client   $client         Client
	 * @param   array               $paginator      Array of paginator.
	 * @param   array               $headers        Array of headers request. [Optional]
	 * @param   string|null         $expectedClass  Class name of expected class. Di default is null. [Optional]
	 */
	public function __construct (\Overplace\Client $client, array $paginator, array $headers = array(), $expectedClass = null)
	{
		parent::__construct($client);
		$page = (isset($paginator['page']) && is_array($paginator['page'])) ? (object) $paginator['page'] : new \stdClass();
		$this->page = new \Overplace\Paginator\Page($page);
		$this->prevPage = (isset($paginator['prev']) && !empty($paginator['prev'])) ? $paginator['prev'] : null;
		$this->currentPage = (isset($paginator['current']) && !empty($paginator['current'])) ? $paginator['current'] : null;
		$this->nextPage = (isset($paginator['next']) && !empty($paginator['next'])) ? $paginator['next'] : null;
		$this->headers = $headers;
		$this->expectedClass = $expectedClass;
	}

	/**
	 * Verifica se disponibile la pagina precedente.
	 *
	 * Ritorna true se la pagina precedente esiste, altrimenti false.
	 *
	 * @access  public
	 *
	 * @return  bool
	 */
	public function hasPrevPage ()
	{
		return isset($this->prevPage);
	}

	/**
	 * Verifica se disponibile la pagina successiva.
	 *
	 * Ritorna true se la pagina successiva esiste, altrimenti false.
	 *
	 * @access  public
	 *
	 * @return  bool
	 */
	public function hasNextPage ()
	{
		return isset($this->nextPage);
	}

	/**
	 * Get Page.
	 *
	 * Ritorna l'istanza della classe Page.
	 *
	 * @access  public
	 *
	 * @return  \Overplace\Paginator\Page
	 */
	public function getPage ()
	{
		return $this->page;
	}

	/**
	 * Get previous page.
	 *
	 * Effettua una chiamata alle GraphAPI Overplace, richiedendo la pagina precedente
	 * dell'ultima chiamata effettuata. Lancia un Service Exception se la pagina precedente
	 * non esiste.
	 *
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 *
	 * @return  \Overplace\Collection
	 */
	public function getPrevPage ()
	{
		$uri = parse_url($this->prevPage, PHP_URL_PATH);

		if (!isset($uri)){
			throw new \Overplace\Exception\Service("");
		}

		$uri = str_replace("/{$this->client->getGraphApiVersion()}/", "", $uri);
		$params = parse_url($this->prevPage, PHP_URL_QUERY);
		$queryParams = array();

		if (isset($params)){
			parse_str($params, $queryParams);
		}

		return $this->request("GET", $uri, $queryParams, $this->headers, $this->expectedClass);
	}

	/**
	 * Get the current page.
	 *
	 * Ripete l'ultima chiamata effettuata.
	 * Lancia un Service Exception se la pagina corrente non esiste.
	 *
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 *
	 * @return  \Overplace\Collection
	 */
	public function getCurrentPage ()
	{
		$uri = parse_url($this->currentPage, PHP_URL_PATH);

		if (!isset($uri)){
			throw new \Overplace\Exception\Service("");
		}

		$uri = str_replace("/{$this->client->getGraphApiVersion()}/", "", $uri);
		$params = parse_url($this->currentPage, PHP_URL_QUERY);
		$queryParams = array();

		if (isset($params)){
			parse_str($params, $queryParams);
		}

		return $this->request("GET", $uri, $queryParams, $this->headers, $this->expectedClass);
	}

	/**
	 * Get the next page.
	 *
	 * Effettua una chiamata alle GraphAPI Overplace, richiedendo la pagina successiva
	 * dell'ultima chiamata effettuata. Lancia un Service Exception se la pagina precedente
	 * non esiste.
	 *
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 *
	 * @return  \Overplace\Collection
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