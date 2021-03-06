<?php

namespace Overplace\Service;

/**
 * Class Scheda.
 *
 * Servizio per recupere le informazioni pubbliche delle schede.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Scheda
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Scheda
 */
class Scheda extends \Overplace\Service
{

	/**
	 * Scheda constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Scheda();
		$this->endpoint = array(
			'get' => 'schede/%d'
		);
	}

	/**
	 * Return public info of one Scheda.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\Get   $get
	 *
	 * @return  \Overplace\Response\Scheda
	 */
	public function get (\Overplace\Request\Scheda\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['id']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->id), $params);
	}

}

?>