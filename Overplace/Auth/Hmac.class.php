<?php

namespace Overplace\Auth;

/**
 * Class Hmac.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Hmac
 * @namespace   Overplace\Auth
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
class Hmac implements \Overplace\Interfaces\Auth
{

	/**
	 * Client.
	 * @access  protected
	 * @var     \Overplace\Client
	 */
	protected $client;

	/**
	 * Auth constructor.
	 * @access  public
	 * @param   \Overplace\Client $client
	 */
	public function __construct (\Overplace\Client $client)
	{
		$this->client = $client;
	}

	public function __invoke (\Psr\Http\Message\RequestInterface $request, array $options)
	{
		return $request->withHeader("Authentication", $this->getHttpHeader($this->hash($request->getMethod(), (string) $request->getBody())));
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
			throw new \Overplace\Exception\Auth("");
		}

		return substr(hash_hmac("sha512", "{$method} {$body}", $this->client->getApp()->getClientSecret(), false), 0, 80);
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
			throw new \Overplace\Exception\Auth("");
		}

		return "HMAC {$this->client->getApp()->getClientId()}:{$hash}";
	}

}

?>