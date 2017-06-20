<?php

namespace Overplace\Service\Scheda;

/**
 * Class Gallery.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Gallery
 * @namespace   Overplace\Service\Scheda
 * @package     Overplace
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate
 *
 * Date:        20/06/2017
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
		$this->validator = new \Overplace\Validate\Scheda\Gallery();
		$this->endpoint = array(
			'list' => 'schede/%d/gallery/list',
			'get' => 'schede/%d/gallery/%d'
		);
	}

	/**
	 * Returns a collection of Foto response.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\Gallery\Lists    $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Scheda\Gallery\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params, array(), 'Foto');
	}

	/**
	 * Returns Foto response object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Scheda\Gallery\Get      $get
	 *
	 * @return  \Overplace\Response\News
	 */
	public function get (\Overplace\Request\Scheda\Gallery\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idNews']);

		return $this->request("GET", sprintf($this->endpoint['get'], $get->idScheda, $get->idFoto), $params, array(), 'Foto');
	}
}

?>