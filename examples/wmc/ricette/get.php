<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        13/06/2017
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

	output("Initializing ricette service...");
	$service = new \Overplace\Service\Wmc\Ricette($client);
	// Creating request object for get list of recipe object collection.
	$request = new \Overplace\Request\Wmc\Ricette\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc ricette list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Ricetta $ricetta
	 * @var \Overplace\Response\Ricetta $item
	 */
	$ricetta = $list->current();
	foreach ($list as $item){
		if ($item->isVisibile()){
			$ricetta = $item;
			break;
		}
	}

	// Creating request object for get recipe object.
	$request = new \Overplace\Request\Wmc\Ricette\Get();
	$request->setIdWmc($wmc->getId());
	$request->setIdRicetta($ricetta->getId());
	output("Calling wmc ricette get using {$wmc->getTitolo()}...");
	$ricetta = $service->get($request);

	print_r($ricetta);

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>