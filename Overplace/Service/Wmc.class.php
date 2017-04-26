<?php

namespace Overplace\Service;

/**
 * Class Wmc.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Wmc
 * @namespace   Overplace\Service
 * @package     Overplace
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
	}

	public function getList ()
	{
		return $this->request("GET", "schede/list");
	}

	/**
	 * Retrieve info of one wmc.
	 * Throw a Service Exception if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\WmcGet   $wmc    Request object for wmc get method.
	 *
	 * @return  \Overplace\Response\Wmc
	 */
	public function get (\Overplace\Request\WmcGet $wmc)
	{
		if (!$this->validator->validate("get", $wmc)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", "schede/{$wmc->idScheda}/info");
	}

}

?>