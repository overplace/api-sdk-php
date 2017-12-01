<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        17/05/2017
 */
include_once dirname(dirname(__DIR__)) . '/bootstrap.php';

try {
	output("Initializing wmc service....");
	$service = new \Overplace\Service\Wmc($client);
	output("Requesting wmc list...");
	$list = $service->getList();

	// Get first wmc
	/**
	 * @var \Overplace\Response\Wmc $wmc
	 */
	$wmc = $list->current();

	output("Initializing media service...");
	$service = new \Overplace\Service\Wmc\Media($client);
	// Creating request object for upload of media object.
	$request = new \Overplace\Request\Wmc\Media\Upload();
	$request->setIdWmc($wmc->getId());
	$request->setIdTipologia("13");
	$request->setAlt("upload foto via graphapi");
	$request->setTitle("Upload foto via GraphApi Overplace");
	$request->setFile("pictures.jpg");
	output("Calling wmc media upload using {$wmc->getTitolo()}...");
	$foto = $service->upload($request);
	print_r($foto);
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}