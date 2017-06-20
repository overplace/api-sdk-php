<?php

namespace Overplace\Service\Wmc;

/**
 * Class Files.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Files
 * @namespace   Overplace\Service\Wmc
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Files
 *
 * Date:        14/06/2017
 */
class Files extends \Overplace\Service
{

	/**
	 * Media constructor.
	 * @access  public
	 * @see     \Overplace\Service::__construct()
	 * @param   \Overplace\Client   $client     Client.
	 */
	public function __construct (\Overplace\Client $client)
	{
		parent::__construct($client);
		$this->validator = new \Overplace\Validate\Wmc\Files();
		$this->endpoint = array(
			'list' => "wmc/%d/files/list",
			'upload' => "wmc/%d/files/upload"
		);
	}

	/**
	 * Returns a collection of allegato.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Files\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Files\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params, array(), "Allegato");
	}

	/**
	 * Upload file.
	 * Return Allegato object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Files\Upload     $upload
	 *
	 * @return  \Overplace\Response\Allegato
	 */
	public function upload (\Overplace\Request\Wmc\Files\Upload $upload)
	{
		if (!$this->validator->validate("upload", $upload)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForUpload()));
		}

		$params = $upload->toArray();
		unset($params['idWmc']);

		if (file_exists(realpath($params['filename']))){
			$params['file'] = base64_encode(file_get_contents(realpath($params['filename'])));
		}else {
			throw new \Overplace\Exception\Service("File not exists!");
		}

		$params['filename'] = pathinfo($params['filename'], PATHINFO_FILENAME) . '.' . pathinfo($params['filename'], PATHINFO_EXTENSION);

		return $this->request('POST', sprintf($this->endpoint['upload'], $upload->idWmc), $params, array(), 'Allegato');
	}

}

?>