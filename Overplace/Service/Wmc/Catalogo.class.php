<?php

namespace Overplace\Service\Wmc;

/**
 * Class Catalogo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Catalogo
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Catalogo
 *
 * Date:        05/05/2017
 */
class Catalogo extends \Overplace\Service
{

	/**
	 * Catalogo constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Wmc\Catalogo();
		$this->endpoint = array(
			'list' => "wmc/%d/catalogo/list",
			'get' => "wmc/%d/catalogo/%d",
			'delete' => "wmc/%d/catalogo/%d"
		);
	}

	/**
	 * Returns a collection of catalogo.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Catalogo\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Catalogo\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params);
	}

	/**
	 * Returns catalogo object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Catalogo\Get     $get
	 *
	 * @return  \Overplace\Response\Catalogo
	 */
	public function get (\Overplace\Request\Wmc\Catalogo\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idWmc'], $params['idCatalogo']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idWmc, $get->idCatalogo), $params);
	}

	/**
	 * Delete catalogo.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Catalogo\Delete  $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Wmc\Catalogo\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idWmc'], $params['idCatalogo']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idWmc, $delete->idCatalogo), $params);
	}

}

?>