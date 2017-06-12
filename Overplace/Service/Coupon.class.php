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
			'list' => "schede/%d/coupon/list",
			'get' => "schede/%d/coupon/%d",
			'delete' => "schede/%d/coupon/%d"
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

	/**
	 * Returns coupon object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Coupon\Get   $get
	 *
	 * @return  \Overplace\Response\Coupon
	 */
	public function get (\Overplace\Request\Coupon\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idCoupon']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idCoupon), $params);
	}

	/**
	 * Delete coupon.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Coupon\Delete    $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Coupon\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idScheda'], $params['idCoupon']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idScheda, $delete->idCoupon), $params);
	}

}

?>