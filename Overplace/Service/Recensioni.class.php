<?php

namespace Overplace\Service;

/**
 * Class Recensioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Recensioni
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 *
 * Date:        03/05/2017
 */
class Recensioni extends \Overplace\Service
{

	/**
	 * Recensioni constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Recensioni();
		$this->endpoint = array(
			'list' => 'schede/%d/recensioni/list'
		);
	}

	/**
	 * Returns a collection of commenti.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Recensioni\Lists     $recensioniLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Recensioni\Lists $recensioniLists)
	{
		if (!$this->validator->validate("list", $recensioniLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $recensioniLists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $recensioniLists->idScheda), $params);
	}

}

?>