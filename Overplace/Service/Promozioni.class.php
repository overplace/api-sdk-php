<?php

namespace Overplace\Service;

/**
 * Class Promozioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Promozioni
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Promozioni
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
		$this->validator = new \Overplace\Validate\Promozioni();
		$this->endpoint = array(
			'list' => "schede/%d/promozioni/list"
		);
	}

	/**
	 * Returns a collection of Promozioni.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Promozioni\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Promozioni\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

}

?>