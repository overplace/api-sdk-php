<?php

namespace Overplace\Service;

/**
 * Class Event.
 * Service object for events.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 * @uses        \Overplace\Validate\Event
 *
 * Date:        28/04/2017
 */
class Event extends \Overplace\Service
{

	/**
	 * Event constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Event();
		$this->endpoint = array(
			'list' => "schede/%d/eventi/list",
			'get' => "schede/%d/eventi/%d"
		);
	}

	/**
	 * Returns a collection of events.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Event\Lists     $eventsList
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Event\Lists $eventsList)
	{
		if (!$this->validator->validate("list", $eventsList)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $eventsList->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $eventsList->idScheda), $params);
	}

	/**
	 * Returns event object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Event\Get     $eventGet
	 *
	 * @return  \Overplace\Response\Event
	 */
	public function get (\Overplace\Request\Event\Get $eventGet)
	{
		if (!$this->validator->validate("get", $eventGet)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $eventGet->idScheda, $eventGet->idEvent), array());
	}

}

?>