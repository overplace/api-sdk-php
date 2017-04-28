<?php

namespace Overplace\Service;

/**
 * Class News.
 * Service object for news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
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
		$this->endpoint = array(
			'list' => "schede/%d/news/list",
			'get' => "schede/%d/news/%d"
		);
	}

	/**
	 * Returns a collection of news.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Lists     $newsList
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\News\Lists $newsList)
	{
		if (!$this->validator->validate("list", $newsList)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $newsList->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $newsList->idScheda), $params);
	}

	/**
	 * Returns news object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Get     $newsGet
	 *
	 * @return  \Overplace\Response\News
	 */
	public function get (\Overplace\Request\News\Get $newsGet)
	{
		if (!$this->validator->validate("get", $newsGet)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $newsGet->idScheda, $newsGet->idNews), array());
	}

}

?>