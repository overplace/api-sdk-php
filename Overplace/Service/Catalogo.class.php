<?php

namespace Overplace\Service;

/**
 * Class Catalogo.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Catalogo
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Catalogo
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
		$this->validator = new \Overplace\Validate\Catalogo();
		$this->endpoint = array(
			'list' => "schede/%d/catalogo/list",
			'get' => "schede/%d/catalogo/%d"
		);
	}

	/**
	 * Returns a collection of catalogo.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Catalogo\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Catalogo\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns catalogo object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Catalogo\Get     $get
	 *
	 * @return  \Overplace\Response\Catalogo
	 */
	public function get (\Overplace\Request\Catalogo\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idCatalogo));
	}

}

?>