<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        17/05/2017
 */
include_once dirname(__DIR__) . '/bootstrap.php';

try {
	output("Initializing wmc service....");
	$service = new \Overplace\Service\Wmc($client);
	$list = $service->getList();

	// Assign first wmc id to idWmc
	$idWmc = $list->current()->getId();

	// Creating request object for get wmc object.
	$request = new \Overplace\Request\Wmc\Get();
	$request->setIdWmc($idWmc);
	output("Calling for get wmc...");
	$wmc = $service->get($request);

	output("Wmc Response");
	print_r($wmc->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>