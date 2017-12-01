<?php

namespace Overplace;

/**
 * Class Client.
 *
 * Contiene tutte le impostazioni principali che vengono utilizzate dai Service.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Client
 * @namespace   Overplace
 * @package     Overplace
 * @see         \Overplace\App
 * @see         \Overplace\Interfaces\Auth
 */
class Client
{

	/**
	 * Client UserAgent.
	 *
	 * User Agent che verrà utilizzato per effettuare le chiamate tramite
	 * i service.
	 *
	 * @var     string
	 */
	const USER_AGENT = "overplace-client-api-sdk-php";

	/**
	 * Client version.
	 *
	 * Versione del client utilizzato.
	 *
	 * @var     string
	 */
	const CLIENT_VERSION = "1.0.0";

	/**
	 * Default GraphAPI version.
	 *
	 * Versione delle GraphAPI che utilizzeranno i Service per effettuare
	 * le richieste ad Overplace nel caso in cui non venisse impostata.
	 *
	 * @var     string
	 */
	const DEFAULT_GRAPH_API_VERSION = "v1";

	/**
	 * GraphAPI Base uri.
	 *
	 * URI di base per effettuare le chiamate alle GraphAPI di Overplace.
	 *
	 * @var     string
	 */
	const BASE_URI = "https://graph.overplace.com/";

	/**
	 * Client App.
	 *
	 * Instanza della classe App, contenente le informazioni per l'autenticazione
	 * del client.
	 *
	 * @access  private
	 * @see     \Overplace\Client::getApp()
	 * @var     \Overplace\App
	 */
	private $app;

	/**
	 * GraphAPI version.
	 *
	 * Versione delle GraphAPI che utilizzeranno i Service per le richieste
	 * ad Overplace. Se non viene impostata una versione, verrà automaticamente
	 * utilizzata la versione impostata in DEFAULT_GRAPH_API_VERSION.
	 *
	 * @access  private
	 * @see     \Overplace\Client::getGraphApiVersion()
	 * @var     string
	 */
	private $graphApiVersion;

	/**
	 * Auth class.
	 *
	 * Instanza della classe contenente i metodi per l'autenticazione del client con le GraphAPI
	 * Overplace.
	 *
	 * @access  private
	 * @see     \Overplace\Interfaces\Auth
	 * @var     \Overplace\Interfaces\Auth
	 */
	private $auth;

	/**
	 * Client constructor.
	 *
	 * Costruttore della classe Client.
	 *
	 * @access  public
	 * @example /client_constructor.php
	 * @throws  \Overplace\Exception\Sdk
	 * @param   array   $config     Array con le impostazioni del Client.
	 */
	public function __construct (array $config)
	{
		if (empty($config)){
			throw new \Overplace\Exception\Sdk("");
		}

		if (!isset($config['app']) || empty($config['app']) || !is_array($config['app'])){
			throw new \Overplace\Exception\Sdk("");
		}

		$this->app = new \Overplace\App($config['app']);
		$this->graphApiVersion = (isset($config['graph_version']) && !empty($config['graph_version']) && is_string($config['graph_version'])) ? $config['graph_version'] : self::DEFAULT_GRAPH_API_VERSION;
		$auth = (isset($config['auth']) && class_exists("\\Overplace\\Auth\\" . $config['auth'])) ? "\\Overplace\\Auth\\" . $config['auth'] : \Overplace\Auth\Hmac::class;
		$this->auth = new $auth($this->app);
	}

	/**
	 * Return Client App.
	 *
	 * Ritorna l'instanza della classe App.
	 *
	 * @access  public
	 * @see     \Overplace\App
	 *
	 * @return  \Overplace\App
	 */
	public function getApp ()
	{
		return $this->app;
	}

	/**
	 * Return graph api version.
	 *
	 * Ritorna la versione delle GraphAPI impostata.
	 *
	 * @access  public
	 *
	 * @return  string
	 */
	public function getGraphApiVersion ()
	{
		return $this->graphApiVersion;
	}

	/**
	 * Return Base uri for request.
	 *
	 * Ritorna l'uri di base con la versione impostata
	 * per chiamare le GraphAPI Overplace
	 *
	 * @access  public
	 *
	 * @return  string
	 */
	public function getBaseUri ()
	{
		return self::BASE_URI . $this->graphApiVersion . "/";
	}

	/**
	 * Return Auth class.
	 *
	 * Ritorna l'istanza della classe Auth per effettuare l'autenticazione alle GraphAPI
	 * Overplace.
	 *
	 * @access  public
	 *
	 * @return  \Overplace\Interfaces\Auth
	 */
	public function getAuth ()
	{
		return $this->auth;
	}

}

?>