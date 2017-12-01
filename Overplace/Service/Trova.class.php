<?php

namespace Overplace\Service;

/**
 * Class Trova.
 *
 * Service incaricato per la gestione dell'oggetto Trova.
 * Effettua la ricerca delle attività all'interno di Overplace.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Trova
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 */
class Trova extends \Overplace\Service
{

	/**
	 * Trova constructor.
	 *
	 * Inizializza il Service Trova per effettuare la ricerca in Overplace.
	 *
	 * @access  public
	 * @example /phpdoc/trova/constructor.php
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Trova();
		$this->endpoint = array(
			'get' => 'trova/schede',
		);
	}

	/**
	 * Ricerca in Overplace.
	 *
	 * Effettua la ricerca in Overplace tramite GraphAPI.
	 * Lancia un Service Exception se si verifica un errore durante la chiamata.
	 * Ritorna in caso di successo una Collection di Scheda.
	 *
	 * @access  public
	 * @example /phpdoc/trova/get.php
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Trova\Lists $trova Request Trova\Lists per effettuare la ricerca.
	 *
	 * @return  \Overplace\Collection
	 */
	public function get (\Overplace\Request\Trova\Lists $trova)
	{
		if (!$this->validator->validate("get", $trova)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $trova->toArray();

		return $this->request("GET", $this->endpoint['get'], $params, array(), 'Scheda');
	}

}

?>