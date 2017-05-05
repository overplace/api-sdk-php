<?php

namespace Overplace\Service;

/**
 * Class Coupon.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Coupon
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Coupon
 *
 * Date:        03/05/2017
 */
class Coupon extends \Overplace\Service
{

	/**
	 * Coupon constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Coupon();
		$this->endpoint = array(
			'list' => "schede/%d/coupon/list"
		);
	}

	/**
	 * Returns a collection of coupon.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Coupon\Lists     $couponLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Coupon\Lists $couponLists)
	{
		if (!$this->validator->validate("list", $couponLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $couponLists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $couponLists->idScheda), $params);
	}

}

?>