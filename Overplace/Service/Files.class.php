<?php

namespace Overplace\Service;

/**
 * Class Files.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Files
 * @namespace   Overplace\Service
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Files
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
		$this->validator = new \Overplace\Validate\Files();
		$this->endpoint = array(
			'upload' => "schede/%d/files/upload"
		);
	}

	/**
	 * Upload file.
	 * Return Allegato object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Files\Upload     $upload
	 *
	 * @return  \Overplace\Response\Allegato
	 */
	public function upload (\Overplace\Request\Files\Upload $upload)
	{
		if (!$this->validator->validate("upload", $upload)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForUpload()));
		}

		$params = $upload->toArray();
		unset($params['idScheda']);

		if (file_exists(realpath($params['filename']))){
			$params['file'] = base64_encode(file_get_contents(realpath($params['filename'])));
		}else {
			throw new \Overplace\Exception\Service("File not exists!");
		}

		$params['filename'] = pathinfo($params['filename'], PATHINFO_FILENAME) . '.' . pathinfo($params['filename'], PATHINFO_EXTENSION);

		return $this->request('POST', sprintf($this->endpoint['upload'], $upload->idScheda), $params, array(), 'Allegato');
	}

}

?>