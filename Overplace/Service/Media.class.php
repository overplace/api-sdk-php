<?php

namespace Overplace\Service;

/**
 * Class Media.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Media
 * @namespace   Overplace\Service
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Media
 *
 * Date:        16/05/2017
 */
class Media extends \Overplace\Service
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
		$this->validator = new \Overplace\Validate\Media();
		$this->endpoint = array(
			'list' => "schede/%d/media/list",
			'get' => "schede/%d/media/%d",
			'upload' => "schede/%d/media/upload",
			'patch' => "schede/%d/media/%d",
			'delete' => "schede/%d/media/%d"
		);
	}

	/**
	 * Returns a collection of foto.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Media\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Media\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idScheda']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idScheda), $params, array(), "Foto");
	}

	/**
	 * Returns a foto object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Media\Get    $get
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function get (\Overplace\Request\Media\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idScheda'], $params['idMedia']);

		return $this->request('GET', sprintf($this->endpoint['get'], $get->idScheda, $get->idMedia), $params, array(), "Foto");
	}

	/**
	 * Upload foto.
	 * Return foto object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Media\Upload     $upload
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function upload (\Overplace\Request\Media\Upload $upload)
	{
		if (!$this->validator->validate("upload", $upload)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForUpload()));
		}

		$params = $upload->toArray();
		unset($params['idScheda']);

		if (base64_decode($params['file'], true) === false){
			if (file_exists(realpath($params['file']))){
				$params['file'] = base64_encode(file_get_contents(realpath($params['file'])));
			}else {
				throw new \Overplace\Exception\Service("File not exists!");
			}
		}

		return $this->request('POST', sprintf($this->endpoint['upload'], $upload->idScheda), $params, array(), 'Foto');
	}

	/**
	 * Returns an update foto object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Media\Patch  $patch
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function patch (\Overplace\Request\Media\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fieds: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idScheda'], $params['idMedia']);

		if (empty($params)){
			throw new \Overplace\Exception\Service("Nothing to update!");
		}

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idScheda, $patch->idMedia), $params, array(), "Foto");
	}

	/**
	 * Delete selected foto.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Media\Delete     $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Media\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idScheda'], $params['idMedia']);

		return $this->request('DELETE', sprintf($this->endpoint['delete'], $delete->idScheda, $delete->idMedia), $params);
	}

}

?>