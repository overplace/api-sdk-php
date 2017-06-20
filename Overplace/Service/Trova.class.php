<?php

namespace Overplace\Service;

/**
 * Class Trova.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Trova
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 *
 * Date:        19/06/2017
 */
class Trova extends \Overplace\Service
{

	/**
	 * Trova constructor.
	 * @access  public
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