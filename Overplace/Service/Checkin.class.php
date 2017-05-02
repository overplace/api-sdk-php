<?php

namespace Overplace\Service;

/**
 * Class Checkin.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Checkin
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 *
 * Date:        28/04/2017
 */
class Checkin extends \Overplace\Service
{

	/**
	 * Checkin constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Checkin();
		$this->endpoint = array(
			'list' => 'schede/%d/promozioni/list'
		);
	}

	/**
	 * Returns a collection of checkin.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Checkin\Lists     $checkinLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Checkin\Lists $checkinLists)
	{
		if (!$this->validator->validate("list", $checkinLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $checkinLists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $checkinLists->idScheda), $params);
	}

}

?>