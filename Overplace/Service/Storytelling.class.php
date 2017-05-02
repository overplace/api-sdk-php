<?php

namespace Overplace\Service;

/**
 * Class Storytelling.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Storytelling
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 *
 * Date:        02/05/2017
 */
class Storytelling extends \Overplace\Service
{

	/**
	 * Storytelling constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Storytelling();
		$this->endpoint = array(
			'list' => 'schede/%d/storytelling/list'
		);
	}

	/**
	 * Returns a collection of storytelling.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Storytelling\Lists     $storyLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Storytelling\Lists $storyLists)
	{
		if (!$this->validator->validate("list", $storyLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $storyLists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $storyLists->idScheda), $params);
	}

}

?>