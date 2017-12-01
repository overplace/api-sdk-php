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

	output("Initializing files service...");
	$service = new \Overplace\Service\Wmc\Files($client);
	// Creating request object for upload of files object.
	$request = new \Overplace\Request\Wmc\Files\Upload();
	$request->setIdWmc($wmc->getId());
	$request->setIdTipologia(1);
	$request->setFilename("pictures.png");
	output("Calling wmc media upload using {$wmc->getTitolo()}...");
	$allegato = $service->upload($request);
	print_r($allegato->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}