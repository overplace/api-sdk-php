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
	 * @var \Overplace\Response\Catalogo    $catalogo
	 */
	foreach ($list as $catalogo){
		output("{$catalogo->getId()} - {$catalogo->getTitolo()}");
	}

	/**
	 * @var null|\Overplace\Paginator $paginator
	 */
	$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	// [...] loop until paginator is present and hasNextPage return true.
	while (isset($paginator) && $paginator->hasNextPage()){
		output("Calling wmc news list using {$wmc->getTitolo()} - Page {$paginator->getPage()->getNext()}...");
		// Get next page results.
		// Return a Collection of foto response.

		/**
		 * @var \Overplace\Collection $list
		 */
		$list = $paginator->getNextPage();

		/**
		 * Iterate over Catalogo Collection
		 * @var \Overplace\Response\Catalogo    $catalogo
		 */
		foreach ($list as $catalogo){
			output("{$catalogo->getId()} - {$catalogo->getTitolo()}");
		}
		// Overwrite $paginator with next Response Collection Paginator
		$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	}
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>