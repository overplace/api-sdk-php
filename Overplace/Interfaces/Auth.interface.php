<?php

namespace Overplace\Interfaces;

/**
 * Interface Auth.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Auth
 * @namespace   Overplace\Interfaces
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
interface Auth
{

	/**
	 * Auth constructor.
	 * @access  public
	 * @param   \Overplace\Client   $client
	 */
	public function __construct (\Overplace\Client $client);

	/**
	 * Add http authentication to request.
	 * @access  public
	 * @param   \Psr\Http\Message\RequestInterface  $request
	 * @param   array                               $options
	 *
	 * @return  \GuzzleHttp\Promise\PromiseInterface
	 */
	public function __invoke (\Psr\Http\Message\RequestInterface $request, array $options);

	/**
	 * Generate hash for authentication request.
	 * Return hash string.
	 * @access  public
	 * @throws  \Overplace\Exception\Auth
	 * @param   string  $method     Method request.
	 * @param   string  $body       Request Body. [Optional]
	 *
	 * @return  string
	 */
	public function hash ($method, $body = '');

	/**
	 * Return string to add Http Header Request.
	 * @access  public
	 * @throws  \Overplace\Exception\Auth
	 * @param   string  $hash   Hash make by hash method.
	 *
	 * @return  string
	 */
	public function getHttpHeader ($hash);

}

?>