<?php

namespace Overplace\Service\Wmc;

/**
 * Class News.
 * Service object for news.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        News
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\News
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
		$this->validator = new \Overplace\Validate\Wmc\News();
		$this->endpoint = array(
			'list' => "wmc/%d/news/list",
			'get' => "wmc/%d/news/%d",
			'create' => "wmc/%d/news/create",
			'patch' => "wmc/%d/news/%d",
			'delete' => "wmc/%d/news/%d"
		);
	}

	/**
	 * Returns a collection of news.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\News\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\News\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params);
	}

	/**
	 * Returns news object response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\News\Get     $get
	 *
	 * @return  \Overplace\Response\News
	 */
	public function get (\Overplace\Request\Wmc\News\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idWmc'], $params['idNews']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idWmc, $get->idNews), $params);
	}

	/**
	 * Create news.
	 * Returns news object response.
	 * @access  public
	 * @throws \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\News\Create  $create
	 *
	 * @return  \Overplace\Response\News
	 */
	public function create (\Overplace\Request\Wmc\News\Create $create)
	{
		if (!$this->validator->validate("create", $create)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForCreate()));
		}

		$params = $create->toArray();
		unset($params['idWmc']);

		return $this->request("POST", sprintf($this->endpoint['create'], $create->idWmc), $params);
	}

	/**
	 * Patch news.
	 * Returns updated news object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\News\Patch   $patch
	 *
	 * @return  \Overplace\Response\News
	 */
	public function patch (\Overplace\Request\Wmc\News\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idWmc'], $params['idNews']);

		if (empty($params)){
			throw new \Overplace\Exception\Service("Nothing to update!");
		}

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idWmc, $patch->idNews), $params);
	}

	/**
	 * Delete news.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\News\Delete  $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Wmc\News\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idWmc'], $params['idNews']);

		return $this->request("DELETE", sprintf($this->endpoint['delete'], $delete->idWmc, $delete->idNews), $params);
	}

}

?>