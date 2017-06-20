<?php

namespace Overplace\Service\Wmc;

/**
 * Class Statistiche.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Statistiche
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Statistiche
 *
 * Date:        08/05/2017
 */
class Statistiche extends \Overplace\Service
{

	/**
	 * Statistiche constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Wmc\Statistiche();
		$this->endpoint = array(
			'list' => "wmc/%d/statistiche/scheda"
		);
	}

	/**
	 * Returns a collection of statistiche.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Statistiche\Lists     $lists
	 *
	 * @return  \Overplace\Response\Statistiche
	 */
	public function getList (\Overplace\Request\Wmc\Statistiche\Lists $lists)
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