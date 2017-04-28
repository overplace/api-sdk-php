<?php

namespace Overplace\Auth;

/**
 * Class Hmac.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Hmac
 * @namespace   Overplace\Auth
 * @package     Overplace
 * @see         \Overplace\Interfaces\Auth
 *
 * Date:        19/04/2017
 */
class Hmac implements \Overplace\Interfaces\Auth
{

	/**
	 * App Client.
	 * @access  protected
	 * @var     \Overplace\App
	 */
	protected $app;

	/**
	 * Auth constructor.
	 * @access  public
	 * @param   \Overplace\App $app
	 */
	public function __construct (\Overplace\App $app)
	{
		$this->app = $app;
	}

	/**
	 * Generate hash for authentication request.
	 * Return hash string.
	 * @access  public
	 * @throws  \Overplace\Exception\Auth
	 * @param   string $method  Method request.
	 * @param   string $body    Request Body. [Optional]
	 *
	 * @return  string
	 */
	public function hash ($method, $body = '')
	{
		if (!is_string($method) || empty($method) || !is_string($body)){
			throw new \Overplace\Exception\Auth("Invalid parameters passed to hash method!");
		}

		return substr(hash_hmac("sha512", "{$method} {$body}", $this->app->getClientSecret(), false), 0, 80);
	}

	/**
	 * Return string to add Http Header Request.
	 * @access  public
	 * @throws  \Overplace\Exception\Auth
	 * @param   string  $hash   Hash make by hash method.
	 *
	 * @return  string
	 */
	public function getHttpHeader ($hash)
	{
		if (!is_string($hash) || empty($hash)){
			throw new \Overplace\Exception\Auth("Invalid or empty hash passed to getHttpHeader method!");
		}

		return "HMAC {$this->app->getClientId()}:{$hash}";
	}

}

?>