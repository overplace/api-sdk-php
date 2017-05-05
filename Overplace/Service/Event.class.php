<?php

namespace Overplace\Service;

/**
 * Class Event.
 * Service object for events.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
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
	 * @param   \Overplace\Request\Event\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Event\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns event object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Event\Get     $get
	 *
	 * @return  \Overplace\Response\Event
	 */
	public function get (\Overplace\Request\Event\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idEvent), array());
	}

}

?>