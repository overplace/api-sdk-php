<?php

namespace Overplace\Service;

/**
 * Class Menu.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Menu
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 *
 * Date:        04/05/2017
 */
class Menu extends \Overplace\Service
{

	/**
	 * Menu constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Menu();
		$this->endpoint = array(
			'list' => 'schede/%d/menu/list',
			'get' => 'schede/%d/menu/%d'
		);
	}

	/**
	 * Returns a collection of menu.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Menu\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Menu\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns menu object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Menu\Get     $get
	 *
	 * @return  \Overplace\Response\Menu
	 */
	public function get (\Overplace\Request\Menu\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idMenu));
	}

}

?>