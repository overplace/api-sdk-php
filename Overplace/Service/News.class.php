<?php

namespace Overplace\Service;

/**
 * Class News.
 * Service object for news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Service
 * @package     Overplace
 * @see         \Overplace\Service
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
			'get' => "schede/%d/news/%d",
			'create' => "schede/%d/news/create",
			'patch' => "schede/%d/news/%d",
			'delete' => "schede/%d/news/%d"
		);
	}

	/**
	 * Returns a collection of news.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\News\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params);
	}

	/**
	 * Returns news object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Get     $get
	 *
	 * @return  \Overplace\Response\News
	 */
	public function get (\Overplace\Request\News\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idNews), array());
	}

	/**
	 * Create news.
	 * Returns news object response.
	 * @access  public
	 * @throws \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Create  $create
	 *
	 * @return  \Overplace\Response\News
	 */
	public function create (\Overplace\Request\News\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForCreate()));
		}

		$params = $create->toArray();
		unset($params['idScheda']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idScheda), $params);
	}

	/**
	 * Patch news.
	 * Returns updated news object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Patch   $patch
	 *
	 * @return  \Overplace\Response\News
	 */
	public function patch (\Overplace\Request\News\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idScheda'], $params['idNews']);

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idScheda, $patch->idNews), $params);
	}

	/**
	 * Delete news.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\News\Delete  $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\News\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idScheda, $delete->idNews));
	}

}

?>