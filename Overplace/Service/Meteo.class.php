<?php

namespace Overplace\Service;

/**
 * Class Meteo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Meteo
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 *
 * Date:        28/04/2017
 */
class Meteo extends \Overplace\Service
{

	/**
	 * Meteo constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Meteo();
		$this->endpoint = array(
			'list' => 'schede/%d/meteo/list'
		);
	}

	/**
	 * Returns a collection of checkin.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Meteo\Lists     $meteoLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Meteo\Lists $meteoLists)
	{
		if (!$this->validator->validate("list", $meteoLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $meteoLists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $meteoLists->idScheda), $params);
	}

}

?>