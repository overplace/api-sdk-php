<?php

namespace Overplace\Service\Wmc;

/**
 * Class Coupon.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Coupon
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Coupon
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
		$this->validator = new \Overplace\Validate\Wmc\Coupon();
		$this->endpoint = array(
			'list' => "wmc/%d/coupon/list",
			'get' => "wmc/%d/coupon/%d",
			'create' => "wmc/%d/coupon/create",
			'patch' => "wmc/%d/coupon/%d",
			'delete' => "wmc/%d/coupon/%d"
		);
	}

	/**
	 * Returns a collection of coupon.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Coupon\Lists     $couponLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Coupon\Lists $couponLists)
	{
		if (!$this->validator->validate("list", $couponLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $couponLists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $couponLists->idWmc), $params);
	}

	/**
	 * Returns coupon object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Coupon\Get   $get
	 *
	 * @return  \Overplace\Response\Coupon
	 */
	public function get (\Overplace\Request\Wmc\Coupon\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idWmc'], $params['idCoupon']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idWmc, $get->idCoupon), $params);
	}

	/**
	 * Returns created coupon.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Coupon\Create    $create
	 *
	 * @return  \Overplace\Response\Coupon
	 */
	public function create (\Overplace\Request\Wmc\Coupon\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForCreate()));
		}

		$params = $create->toArray();
		unset($params['idWmc']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idWmc), $params);
	}

	/**
	 * Returns patched coupon.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Coupon\Patch     $patch
	 *
	 * @return  \Overplace\Response\Coupon
	 */
	public function patch (\Overplace\Request\Wmc\Coupon\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idWmc'], $params['idCoupon']);

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idWmc, $patch->idCoupon), $params);
	}

	/**
	 * Delete coupon.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Coupon\Delete    $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Wmc\Coupon\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idWmc'], $params['idCoupon']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idWmc, $delete->idCoupon), $params);
	}

}

?>