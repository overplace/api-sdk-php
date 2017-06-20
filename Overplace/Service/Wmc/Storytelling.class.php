<?php

namespace Overplace\Service\Wmc;

/**
 * Class Storytelling.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Storytelling
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Storytelling
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
		$this->validator = new \Overplace\Validate\Wmc\Storytelling();
		$this->endpoint = array(
			'list' => "wmc/%d/storytelling/list",
			'get' => "wmc/%d/storytelling/%d",
			'create' => "wmc/%d/storytelling/create",
			'patch' => "wmc/%d/storytelling/%d",
			'delete' => "wmc/%d/storytelling/%d"
		);
	}

	/**
	 * Returns a collection of storytelling.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Storytelling\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Storytelling\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params);
	}

	/**
	 * Returns a storytelling response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Storytelling\Get     $get
	 *
	 * @return  \Overplace\Response\Storytelling
	 */
	public function get (\Overplace\Request\Wmc\Storytelling\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idWmc'], $params['idStory']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idWmc, $get->idStory), $params);
	}

	/**
	 * Returns created storytelling object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Storytelling\Create  $create
	 *
	 * @return  \Overplace\Response\Storytelling
	 */
	public function create (\Overplace\Request\Wmc\Storytelling\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForCreate()));
		}

		$params = $create->toArray();
		unset($params['idWmc']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idWmc), $params);
	}

	/**
	 * Returns patched storytelling object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Storytelling\Patch   $patch
	 *
	 * @return  \Overplace\Response\Storytelling
	 */
	public function patch (\Overplace\Request\Wmc\Storytelling\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idWmc'], $params['idStory']);

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idWmc, $patch->idStory), $params);
	}

	/**
	 * Delete a story.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Storytelling\Delete  $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Wmc\Storytelling\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idWmc'], $params['idStory']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idWmc, $delete->idStory), $params);
	}

}

?>