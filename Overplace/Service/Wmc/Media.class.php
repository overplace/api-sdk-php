<?php

namespace Overplace\Service\Wmc;

/**
 * Class Media.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Media
 * @namespace   Overplace\Service\Wmc
 * @see         \Overplace\Service
 * @uses        \Overplace\Validate\Wmc\Media
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
		$this->validator = new \Overplace\Validate\Wmc\Media();
		$this->endpoint = array(
			'list' => "wmc/%d/media/list",
			'get' => "wmc/%d/media/%d",
			'upload' => "wmc/%d/media/upload",
			'patch' => "wmc/%d/media/%d",
			'delete' => "wmc/%d/media/%d"
		);
	}

	/**
	 * Returns a collection of foto.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Media\Lists     $lists
	 *
	 * @return  \Overplace\Collection
	 */
	public function getList (\Overplace\Request\Wmc\Media\Lists $lists)
	{
		if (!$this->validator->validate("list", $lists)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForList()));
		}

		$params = $lists->toArray();
		unset($params['idWmc']);

		return $this->request("GET", sprintf($this->endpoint['list'], $lists->idWmc), $params, array(), "Foto");
	}

	/**
	 * Returns a foto object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Media\Get    $get
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function get (\Overplace\Request\Wmc\Media\Get $get)
	{
		if (!$this->validator->validate("get", $get)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForGet()));
		}

		$params = $get->toArray();
		unset($params['idWmc'], $params['idMedia']);

		return $this->request('GET', sprintf($this->endpoint['get'], $get->idWmc, $get->idMedia), $params, array(), "Foto");
	}

	/**
	 * Upload foto.
	 * Return foto object response.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Media\Upload     $upload
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function upload (\Overplace\Request\Wmc\Media\Upload $upload)
	{
		if (!$this->validator->validate("upload", $upload)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForUpload()));
		}

		$params = $upload->toArray();
		unset($params['idWmc']);

		if (base64_decode($params['file'], true) === false){
			if (file_exists(realpath($params['file']))){
				$params['file'] = base64_encode(file_get_contents(realpath($params['file'])));
			}else {
				throw new \Overplace\Exception\Service("File not exists!");
			}
		}

		return $this->request('POST', sprintf($this->endpoint['upload'], $upload->idWmc), $params, array(), 'Foto');
	}

	/**
	 * Returns an update foto object.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Media\Patch  $patch
	 *
	 * @return  \Overplace\Response\Foto
	 */
	public function patch (\Overplace\Request\Wmc\Media\Patch $patch)
	{
		if (!$this->validator->validate("patch", $patch)){
			throw new \Overplace\Exception\Service("Required fieds: " . implode(",", $this->validator->getRequiredForPatch()));
		}

		$params = $patch->toArray();
		unset($params['idWmc'], $params['idMedia']);

		if (empty($params)){
			throw new \Overplace\Exception\Service("Nothing to update!");
		}

		return $this->request("PATCH", sprintf($this->endpoint['patch'], $patch->idWmc, $patch->idMedia), $params, array(), "Foto");
	}

	/**
	 * Delete selected foto.
	 * Throw \Overplace\Exception\Service if an error occurred.
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   \Overplace\Request\Wmc\Media\Delete     $delete
	 *
	 * @return  \Overplace\Response
	 */
	public function delete (\Overplace\Request\Wmc\Media\Delete $delete)
	{
		if (!$this->validator->validate("delete", $delete)){
			throw new \Overplace\Exception\Service("Required fields: " . implode(",", $this->validator->getRequiredForDelete()));
		}

		$params = $delete->toArray();
		unset($params['idWmc'], $params['idMedia']);

		return $this->request('DELETE', sprintf($this->endpoint['delete'], $delete->idWmc, $delete->idMedia), $params);
	}

}

?>