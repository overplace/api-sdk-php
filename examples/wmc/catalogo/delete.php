<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        07/06/2017
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

	output("Initializing catalogo service...");
	$service = new \Overplace\Service\Wmc\Catalogo($client);
	// Creating request object for get list of catalogo object collection.
	$request = new \Overplace\Request\Wmc\Catalogo\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc catalogo list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Catalogo    $item, $catalogo
	 */
	$catalogo = $list->current();
	foreach ($list as $item){
		if (!$item->isVisibile()){
			$catalogo = $item;
			break;
		}
	}

	// Creating request object for delete catalogo.
	$request = new \Overplace\Request\Wmc\Catalogo\Delete();
	$request->setIdWmc($wmc->getId());
	$request->setIdCatalogo($catalogo->getId());
	output("Calling wmc catalogo delete using {$wmc->getTitolo()}...");
	$response = $service->delete($request);
	echo $response->getMessage();
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>