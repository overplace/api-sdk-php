<?php

namespace Overplace\Service;

/**
 * Class Gallery.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Gallery
 * @namespace   Overplace\Service
 * @package     Overplace
 * @uses        \Overplace\Service
 *
 * Date:        02/05/2017
 */
class Gallery extends \Overplace\Service
{

	/**
	 * Gallery constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Gallery();
		$this->endpoint = array(
			'list' => 'schede/%d/gallery/list'
		);
	}

	/**
	 * Returns a collection of foto.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Gallery\Lists     $galleryLists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Gallery\Lists $galleryLists)
	{
		if (!$this->validator->validate("list", $galleryLists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $galleryLists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $galleryLists->idScheda), $params, array(), "Foto");
	}

}

?>