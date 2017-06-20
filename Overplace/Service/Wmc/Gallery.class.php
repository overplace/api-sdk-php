<?php

namespace Overplace\Service\Wmc;

/**
 * Class Gallery.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Gallery
 * @namespace   Overplace\Service\Wmc
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Gallery
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
		$this->validator = new \Overplace\Validate\Wmc\Gallery();
		$this->endpoint = array(
			'list' => "wmc/%d/gallery/list"
		);
	}

	/**
	 * Returns a collection of foto.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Gallery\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Gallery\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params, array(), "Foto");
	}

}

?>