<?php

namespace Overplace\Service\Wmc;

/**
 * Class Recensioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Recensioni
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Recensioni
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
		$this->validator = new \Overplace\Validate\Wmc\Recensioni();
		$this->endpoint = array(
			'list' => "wmc/%d/recensioni/list"
		);
	}

	/**
	 * Returns a collection of Recensioni.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Recensioni\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Recensioni\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params);
	}

}

?>