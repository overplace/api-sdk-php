<?php

namespace Overplace\Service;

/**
 * Class News.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Service
 * @package     Overplace
 * @extends     \Overplace\Service
 * @uses        \Overplace\Validate\News
 *
 * Date:        19/04/2017
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
		$this->validator = new \Overplace\Validate\News();
	}

	/**
	 * Returns a collection of news.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\NewsList     $newsList
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\NewsList $newsList)
	{
		if (!$this->validator->validate("list", $newsList)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $newsList->toArray();
		unset($params['idScheda']);

		return $this->request("GET", "schede/{$newsList->idScheda}/news/list", $params);
	}

}

?>