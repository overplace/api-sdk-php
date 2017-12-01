<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        08/06/2017
 */
include_once dirname(__DIR__) . '/bootstrap.php';

try {
	output("Initializing trova service....");
	$service = new \Overplace\Service\Trova($client);
	// Creating request object for get list of storytelling object collection.
	$request = new \Overplace\Request\Trova\Lists();
	$request->cosa = "Hotel Mario rossi";
//	$request->dove = "Perugia";
	$request->setLimit(20);
//	$request->setLatitudine(42.916676);
//	$request->setLongitudine(12.728191);
//	$request->setDistanza(25);
//  $request->addSortBy($request::SORT_BY_DISTANCE, $request::ORDER_ASC);

//	$request->addSortBy($request::SORT_BY_COMMENTS, $request::ORDER_ASC);

//	$request->setModuli(array($request::HAS_CHECKIN));
	output("Requesting trova list...");
	$list = $service->get($request);

	/**
	 * @var \Overplace\Response\Scheda $scheda
	 */
	foreach ($list as $scheda){
		//output($scheda->getTitolo());
		print_r($scheda->toArray());
		exit();
	}

	/**
	 * @var null|\Overplace\Paginator $paginator
	 */
	$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	// [...] loop until paginator is present and hasNextPage return true.
	while (isset($paginator) && $paginator->hasNextPage()){
		output("Calling trova list - Page {$paginator->getPage()->getNext()}...");
		// Get next page results.
		// Return a Collection of Scheda response.

		/**
		 * @var \Overplace\Collection $list
		 */
		$list = $paginator->getNextPage();

		/**
		 * Iterate over Schede Collection
		 * @var \Overplace\Response\Scheda $scheda
		 */
		foreach ($list as $scheda){
			output($scheda->getTitolo());
			if ($scheda->getStato()->getId() == 1 && $schedaAttiva == null){
				$schedaAttiva = $scheda;
			}
		}

		// Overwrite $paginator with next Response Collection Paginator
		$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	}
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>