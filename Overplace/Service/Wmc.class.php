<?php

namespace Overplace\Service;

/**
 * Class Wmc.
 *
 * Service incaricato per la gestione dell'oggetto Wmc.
 * E' possibile richiedere la lista dei Web Media Center disponibili e/o
 * le informazioni pubbliche di un singolo Web Media Center.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Wmc
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @see         \Overplace\Validate\Wmc
 */
class Wmc extends \Overplace\Service
{

	/**
	 * Wmc constructor.
	 *
	 * Costruttore del service Wmc.
	 * Service per effettuare le chiamate per l'oggetto Wmc.
	 *
	 * @access  public
	 * @example /phpdoc/wmc/constructor.php
	 * @param   \Overplace\Client   $client     Instanza della classe Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Wmc();
		$this->endpoint = array(
			'list' => "wmc/list",
			'get' => "wmc/%d"
		);
	}

	/**
	 * Recupera la lista di Web Media Center.
	 *
	 * Effettua una chiamata alle GraphAPI Overplace per recuperare la lista
	 * dei Web Media Center disponibili per le credenziali impostate nel Client.
	 * Lancia un Service Exception se si verifica un errore durante la chiamata.
	 * In caso di successo ritorna una Collection di Response\Wmc.
	 *
	 * @access  public
	 * @example /phpdoc/wmc/getList.php
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Lists    $lists  Wmc\Lists request class. Di default è null. [Optional]
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Lists $lists = null)
	{
		return $this->request("GET", $this->endpoint['list'], (isset($lists)) ? $lists->toArray() : array());
	}

	/**
	 * Recupera le informazioni di un singolo Web Media Center.
	 *
	 * Effettua una chiamata alle GraphAPI Overplace per recuperare le informazioni
	 * di un singolo Web Media Center. Lancia un Service Exception se si verifica un errore durante la chiamata.
	 * In caso di successo ritorna l'instanza della classe Response\Wmc.
	 *
	 * @access  public
	 * @example /phpdoc/wmc/get.php
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Get  $get    Request Wmc\Get object per il metodo Get.
	 *                                              La proprietà obbligatoria è il campo idWmc.
	 *
	 * @return  \Overplace\Response\Wmc
	 */
	public function get (\Overplace\Request\Wmc\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idWmc), array());
	}

}

?>