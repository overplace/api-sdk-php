<?php

namespace Overplace\Service;

/**
 * Class Storytelling.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Storytelling
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Storytelling
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
			'list' => "schede/%d/storytelling/list",
			'get' => "schede/%d/storytelling/%d",
			'create' => "schede/%d/storytelling/create",
			'patch' => "schede/%d/storytelling/%d",
			'delete' => "schede/%d/storytelling/%d"
		);
	}

	/**
	 * Returns a collection of storytelling.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Storytelling\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Storytelling\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns a storytelling response.
	 * Throw \Overplace\Exception\Service if an error occured.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Storytelling\Get     $get
	 *
	 * @return  \Overplace\Response\Storytelling
	 */
	public function get (\Overplace\Request\Storytelling\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idStory']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idStory), $params);
	}

	/**
	 * Returns created storytelling object response.
	 * Throw \Overplace\Exception\Service if an error occured.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Storytelling\Create  $create
	 *
	 * @return  \Overplace\Response\Storytelling
	 */
	public function create (\Overplace\Request\Storytelling\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForCreate()));
		}

		$params = $create->toArray();
		unset($params['idScheda']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idScheda), $params);
	}

	/**
	 * Returns patched storytelling object response.
	 * Throw \Overplace\Exception\Service if an error occured.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Storytelling\Patch   $patch
	 *
	 * @return  \Overplace\Response\Storytelling
	 */
	public function patch (\Overplace\Request\Storytelling\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idScheda'], $params['idStory']);

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idScheda, $patch->idStory), $params);
	}

	/**
	 * Delete a story.
	 * Throw \Overplace\Exception\Service if an error occured.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Storytelling\Delete  $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Storytelling\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idScheda'], $params['idStory']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idScheda, $delete->idStory), $params);
	}

}

?>