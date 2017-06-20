<?php

namespace Overplace\Service\Scheda;

/**
 * Class Event.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Event
 * @namespace   Overplace\Service\Scheda
 * @package     Overplace
 * @see         \Overplace\Service
 *
 * Date:        20/06/2017
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
		$this->validator = new \Overplace\Validate\Scheda\Event();
		$this->endpoint = array(
			'list' => 'schede/%d/eventi/list',
			'get' => 'schede/%d/eventi/%d'
		);
	}

	/**
	 * Returns a collection of Event response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\Event\Lists    $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Scheda\Event\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns News response object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\Event\Get      $get
	 *
	 * @return  \Overplace\Response\News
	 */
	public function get (\Overplace\Request\Scheda\Event\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idEvent']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idEvent), $params);
	}

}

?>