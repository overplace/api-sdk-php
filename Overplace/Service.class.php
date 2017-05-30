<?php

namespace Overplace;

/**
 * Class Service.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Service
 * @namespace   Overplace
 * @package     Overplace
 * @uses        \Overplace\Client
 * @uses        \GuzzleHttp\Client
 *
 * Date:        19/04/2017
 */
class Service
{

	/**
	 * Client.
	 * @access  protected
	 * @var     \Overplace\Client
	 */
	protected $client;

	/**
	 * Guzzle Client.
	 * @access  protected
	 * @var     \GuzzleHttp\Client
	 */
	protected $guzzle;

	/**
	 * Validate request.
	 * @access  protected
	 * @var     \Overplace\Validate
	 */
	protected $validator;

	/**
	 * Array endpoint of service.
	 * @access  protected
	 * @var     array
	 */
	protected $endpoint;

	/**
	 * Request constructor.
	 * @access  public
	 * @param   \Overplace\Client   $client     Client
	 */
	public function __construct (\Overplace\Client $client)
	{
		$this->client = $client;
		$this->guzzle = new \GuzzleHttp\Client([
			'base_uri' => $this->client->getBaseUri(),
			'allow_redirects' => false,
			'verify' => false,
			'http_errors' => false,
			'headers' => array(
				'Cache-Control' => 'no-cache',
				'Pragma' => 'no-cache',
				'user-agent' => \Overplace\Client::USER_AGENT . \Overplace\Client::CLIENT_VERSION
			)
		]);
	}

	/**
	 * Execute request to graph API Overplace.
	 * Throw a Service Exception if an error occurred.
	 * Returns a Collection object if is a list or Response object of service that
	 * called the request.
	 * @access  protected
	 * @throws  \Overplace\Exception\Service
	 * @param   string      $method         Http Method string
	 * @param   string      $uri            Endpoint beginning without slash
	 * @param   array       $params         Array params to send with request. [Optional]
	 * @param   array       $headers        Array with additional headers. [Optional]
	 * @param   string|null $expectedClass  Class name of expected class. Default is null. [Optional]
	 *
	 * @return  \Overplace\Collection|mixed
	 */
	protected function request ($method, $uri, array $params = array(), array $headers = array(), $expectedClass = null)
	{
		$auth = $this->client->getAuth();
		if ($method == 'GET'){
			$options = array(
				'headers' => array_merge($headers, array(
						'Authentication' => $auth->getHttpHeader($auth->hash($method, http_build_query($params, null, "&", PHP_QUERY_RFC1738)))
					)
				),
				'query' => $params
			);
		}else {
			$options = array(
				'headers' => array_merge($headers, array(
						'Authentication' => $auth->getHttpHeader($auth->hash($method, json_encode($params, 0, 512)))
					)
				),
				'json' => $params
			);
		}

		$response = $this->guzzle->request($method, $uri, $options);
		$body = json_decode($response->getBody()->getContents(), true, 512, 0);
		if (($response->getStatusCode() < 200 || $response->getStatusCode() >= 300) || !(isset($body['status']) && $body['status'])){
			throw new \Overplace\Exception\Service($body['message'], $response->getStatusCode());
		}

		if ($method == 'DELETE'){
			return new \Overplace\Response(array(), array(), $body['message']);
		}

		$class = (isset($expectedClass) && is_string($expectedClass) && !empty($expectedClass)) ? $expectedClass : substr(static::class, (strrpos(static::class, "\\") + 1), strlen(static::class));
		if (!class_exists("\\Overplace\\Response\\{$class}")){
			throw new \Overplace\Exception\Service("Invalid or missing {$class} class in response namespace!");
		}

		$reflectionClass = new \ReflectionClass("\\Overplace\\Response\\{$class}");
		if (isset($body['list'])){
			$collection = array();
			$len = count($body['list']);
			for ($i = 0; $i < $len; $i++){
				$collection[] = $reflectionClass->newInstance($body['list'][$i]);
			}

			$paginator = null;
			if (isset($body['paginator']) && !empty($body['paginator'])){
				$paginator = new \Overplace\Paginator($this->client, $body['paginator'], $headers, $class);
			}

			return new \Overplace\Collection($collection, $paginator);
		}

		return $reflectionClass->newInstance($body['content']);
	}

}

?>