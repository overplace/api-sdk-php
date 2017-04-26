<?php

namespace Overplace;

/**
 * Class Client.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Client
 * @namespace   Overplace
 * @package     Overplace
 */
class Client
{

	/**
	 * User Agent name of client.
	 * @var     string
	 */
	const USER_AGENT = "overplace-client-sdk-php";

	/**
	 * Sdk Client Version.
	 * @var     string
	 */
	const CLIENT_VERSION = "1.0.0";

	/**
	 * Default graph api version.
	 * @var     string
	 */
	const DEFAULT_GRAPH_API_VERSION = "v1";

	/**
	 * Api Base uri.
	 * @var     string
	 */
	const BASE_URI = "https://graph.overplace.com/";

	/**
	 * Client App.
	 * @access  private
	 * @see     \Overplace\Client::getApp()
	 * @var     \Overplace\App
	 */
	private $app;

	/**
	 * Graph api version.
	 * @access  private
	 * @see     \Overplace\Client::getGraphApiVersion()
	 * @var     string
	 */
	private $graphApiVersion;

	/**
	 * Auth class.
	 * @access  private
	 * @var     \Overplace\Interfaces\Auth
	 */
	private $auth;

	/**
	 * Client constructor.
	 * @access  public
	 * @throws  \Overplace\Exception\Sdk
	 * @param   array   $config
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
		$this->auth = (new \ReflectionClass($auth))->newInstance($this);
	}

	/**
	 * Return Client App.
	 * @access  public
	 *
	 * @return  \Overplace\App
	 */
	public function getApp ()
	{
		return $this->app;
	}

	/**
	 * Return graph api version.
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