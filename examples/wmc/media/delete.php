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
	// Creating request object for get list of media object collection.
	$request = new \Overplace\Request\Wmc\Media\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc media list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Foto $media
	 */
	$media = $list->current();

	// Creating request object for delete media object.
	$request = new \Overplace\Request\Wmc\Media\Delete();
	$request->setIdWmc($wmc->getId());
	$request->setIdMedia($media->getId());
	output("Calling wmc media delete using {$wmc->getTitolo()}... (true calling is commented to prevent delete)");
//	$response = $service->delete($request);
//	output($response->getMessage());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>