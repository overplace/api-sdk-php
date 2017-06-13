<?php

namespace Overplace\Service;

/**
 * Class Ricette.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Ricette
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Ricette
 *
 * Date:        02/05/2017
 */
class Ricette extends \Overplace\Service
{

	/**
	 * Ricette constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Ricette();
		$this->endpoint = array(
			'list' => "schede/%d/ricette/list",
			'get' => "schede/%d/ricette/%d",
			'create' => "schede/%d/ricette/create",
			'patch' => "schede/%d/ricette/%d",
			'delete' => "schede/%d/ricette/%d"
		);
	}

	/**
	 * Returns a collection of ricette.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Ricette\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Ricette\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params, array(), 'Ricetta');
	}

	/**
	 * Returns Ricette object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Ricette\Get  $get
	 *
	 * @return  \Overplace\Response\Ricetta
	 */
	public function get (\Overplace\Request\Ricette\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idRicetta']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idRicetta), $params, array(), 'Ricetta');
	}

	/**
	 * Create a recipe.
	 * Returns Ricetta response object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Ricette\Create   $create
	 *
	 * @return  \Overplace\Response\Ricetta
	 */
	public function create (\Overplace\Request\Ricette\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $create->toArray();
		unset($params['idScheda']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idScheda), $params, array(), 'Ricetta');
	}

	/**
	 * Patch a recipe.
	 * Return patched recipe.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Ricette\Patch    $patch
	 *
	 * @return  \Overplace\Response\Ricetta
	 */
	public function patch (\Overplace\Request\Ricette\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idScheda'], $params['idRicetta']);

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idScheda, $patch->idRicetta), $params, array(), 'Ricetta');
	}

	/**
	 * Delete recipe.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Ricette\Delete   $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Ricette\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idScheda'], $params['idRicetta']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idScheda, $delete->idRicetta), $params);
	}

}

?>