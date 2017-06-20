<?php

namespace Overplace\Service\Scheda;

/**
 * Class News.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Service\Scheda
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Scheda\News
 *
 * Date:        20/06/2017
 */
class News extends \Overplace\Service
{

	/**
	 * News constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Scheda\News();
		$this->endpoint = array(
			'list' => 'schede/%d/news/list',
			'get' => 'schede/%d/news/%d'
		);
	}

	/**
	 * Returns a collection of News response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\News\Lists    $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Scheda\News\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns News response object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\News\Get      $get
	 *
	 * @return  \Overplace\Response\News
	 */
	public function get (\Overplace\Request\Scheda\News\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idNews']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idNews), $params);
	}

}

?>