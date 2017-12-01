<?php

namespace Overplace;

/**
 * Class App.
 *
 * Classe contenente le credenziali ed impostazioni dell'app creata dall'utente in http://developers.overplace.com
 *
 * Date: 19/04/2017
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        App
 * @namespace   Overplace
 * @package     Overplace
 */
class App
{

	/**
	 * App client id.
	 *
	 * Chiave pubblica generata da http://developers.overplace.com
	 *
	 * @access  private
	 * @see     \Overplace\App::getClientId()
	 * @var     string
	 */
	private $clientId;

	/**
	 * App client secret.
	 *
	 * Chiave privata generata da http://developers.overplace.com
	 *
	 * @access  private
	 * @see     \Overplace\App::getClientSecret()
	 * @var     string
	 */
	private $clientSecret;

	/**
	 * App client redirect uri.
	 *
	 * Lista degli url validi dove poter effettuare il redirect da parte di Overplace.
	 *
	 * @access  private
	 * @see     \Overplace\App::getRedirectUri()
	 * @var     string
	 */
	private $redirectUri;

	/**
	 * App constructor.
	 *
	 * Inizializza la classe App con le impostazioni passate.
	 *
	 * @access  public
	 * @throws  \Overplace\Exception\Sdk
	 * @param   array   $app    Array contenente le informazioni dell'app.
	 */
	public function __construct (array $app)
	{
		if (empty($app) || !isset($app['client_id'], $app['client_secret']) || empty($app['client_id']) || empty($app['client_secret']) || !is_string($app['client_id']) || !is_string($app['client_secret'])){
			throw new \Overplace\Exception\Sdk("Missing or invalid client credentials!");
		}

		$this->clientId = $app['client_id'];
		$this->clientSecret = $app['client_secret'];
		$this->redirectUri = (isset($app['redirect_uri']) && !empty($app['redirect_uri']) && is_string($app['redirect_uri'])) ? $app['redirect_uri'] : "";
	}

	/**
	 * Return App Client Id.
	 *
	 * Ritorna la chiave pubblica impostata.
	 *
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
	 *
	 * Ritorna la chiave privata impostata.
	 *
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
	 *
	 * Ritorna la lista degli url impostati.
	 *
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