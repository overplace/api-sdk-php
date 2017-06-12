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
			'get' => "schede/%d/eventi/%d",
			'create' => "schede/%d/eventi/create",
			'patch' => "schede/%d/eventi/%d",
			'delete' => "schede/%d/eventi/%d"
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

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idEvent));
	}

	/**
	 * Create an Event.
	 * Return Event object response if successfully created.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Event\Create     $create
	 *
	 * @return  \Overplace\Response\Event
	 */
	public function create (\Overplace\Request\Event\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForCreate()));
		}

		$params = $create->toArray();
		unset($params['idScheda']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idScheda), $params);
	}

	/**
	 * Patch Event.
	 * Return updated Event object response if success.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Event\Patch     $patch
	 *
	 * @return  \Overplace\Response\Event
	 */
	public function patch (\Overplace\Request\Event\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idScheda'], $params['idEvent']);

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idScheda, $patch->idEvent), $params);
	}

	/**
	 * Delete Event.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Event\Delete     $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Event\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idScheda'], $params['idEvent']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idScheda, $delete->idEvent), $params);
	}

}

?>