<?php

namespace Overplace\Service\Wmc;

/**
 * Class Promozioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Promozioni
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Promozioni
 *
 * Date:        28/04/2017
 */
class Promozioni extends \Overplace\Service
{

	/**
	 * Promozioni constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Wmc\Promozioni();
		$this->endpoint = array(
			'list' => "wmc/%d/promozioni/list",
			'get' => "wmc/%d/promozioni/%d"
		);
	}

	/**
	 * Returns a collection of Promozioni.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Promozioni\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Promozioni\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params, array(), 'Promozione');
	}

	/**
	 * Returns Promozione response object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Promozioni\Get   $get
	 *
	 * @return  \Overplace\Response\Promozione
	 */
	public function get (\Overplace\Request\Wmc\Promozioni\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idWmc'], $params['idPromozione']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idWmc, $get->idPromozione), $params, array(), 'Promozione');
	}

}

?>