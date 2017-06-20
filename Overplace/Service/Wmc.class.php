<?php

namespace Overplace\Service;

/**
 * Class Wmc.
 * Service object for wmc.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Wmc
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc
 *
 * Date:        19/04/2017
 */
class Wmc extends \Overplace\Service
{

	/**
	 * Wmc constructor.
	 * @access  public
	 * @param   \Overplace\Client   $client     Client
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Wmc();
		$this->endpoint = array(
			'list' => "wmc/list",
			'get' => "wmc/%d"
		);
	}

	/**
	 * Returns a collection of wmc.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Lists    $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Lists $lists = null)
	{
		return $this->request("GET", $this->endpoint['list'], (isset($lists)) ? $lists->toArray() : array());
	}

	/**
	 * Retrieve info of one wmc.
	 * Throw a Service Exception if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Get   $get    Request object for wmc get method.
	 *
	 * @return  \Overplace\Response\Wmc
	 */
	public function get (\Overplace\Request\Wmc\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda), array());
	}

}

?>