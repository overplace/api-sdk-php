<?php

namespace Overplace\Service\Scheda;

/**
 * Class Recensioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Recensioni
 * @namespace   Overplace\Service\Scheda
 * @package     Overplace
 * @see         \Overplace\Service::__construct()
 * @uses        \Overplace\Validate\Scheda\Recensioni
 *
 * Date:        21/06/2017
 */
class Recensioni extends \Overplace\Service
{

	/**
	 * Recensioni constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Scheda\Recensioni();
		$this->endpoint = array(
			'list' => 'schede/%d/recensioni/list'
		);
	}

	/**
	 * Returns a collection of Recensioni.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\Recensioni\Lists  $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Scheda\Recensioni\Lists $lists)
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