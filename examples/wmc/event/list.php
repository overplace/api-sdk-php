<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        06/06/2017
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

	output("Initializing event service...");
	$service = new \Overplace\Service\Wmc\Event($client);
	// Creating request object for get list of event object collection.
	$request = new \Overplace\Request\Wmc\Event\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc event list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Event    $event
	 */
	foreach ($list as $event){
		output("{$event->getId()} - {$event->getTitolo()}");
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
		 * Iterate over Event Collection
		 * @var \Overplace\Response\Event    $event
		 */
		foreach ($list as $event){
			output("{$event->getId()} - {$event->getTitolo()}");
		}

		// Overwrite $paginator with next Response Collection Paginator
		$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	}
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>