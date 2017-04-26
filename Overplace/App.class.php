<?php

namespace Overplace;

/**
 * Class App.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        App
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
class App
{

	/**
	 * App client id.
	 * @access  private
	 * @see     \Overplace\App::getClientId()
	 * @var     string
	 */
	private $clientId;

	/**
	 * App client secret.
	 * @access  private
	 * @see     \Overplace\App::getClientSecret()
	 * @var     string
	 */
	private $clientSecret;

	/**
	 * App client redirect uri.
	 * @access  private
	 * @see     \Overplace\App::getRedirectUri()
	 * @var     string
	 */
	private $redirectUri;

	/**
	 * App constructor.
	 * @access  public
	 * @throws  \Overplace\Exception\Sdk
	 * @param   array   $app
	 */
	public function __construct (array $app)
	{
		if (empty($app) || !isset($app['client_id'], $app['client_secret']) || empty($app['client_id']) || empty($app['client_secret']) || !is_string($app['client_id']) || !is_string($app['client_secret'])){
			throw new \Overplace\Exception\Sdk("");
		}

		$this->clientId = $app['client_id'];
		$this->clientSecret = $app['client_secret'];
		$this->redirectUri = (isset($app['redirect_uri']) && !empty($app['redirect_uri']) && is_string($app['redirect_uri'])) ? $app['redirect_uri'] : "";
	}

	/**
	 * Return App Client Id.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getClientId ()
	{
		return $this->clientId;
	}

	/**
	 * Return App Client Secret.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getClientSecret ()
	{
		return $this->clientSecret;
	}

	/**
	 * Return App Client Redirect Uri.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getRedirectUri ()
	{
		return $this->redirectUri;
	}

}

?>