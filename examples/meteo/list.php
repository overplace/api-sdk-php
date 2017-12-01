<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        12/06/2017
 */
include_once dirname(__DIR__) . '/bootstrap.php';

try {
	output("Initializing meteo service....");
	$service = new \Overplace\Service\Meteo($client);

	$comune = 'Perugia';

	// Creating request object for get list of meteo object collection.
	$request = new \Overplace\Request\Meteo\Lists();
	$request->setComune($comune);
	// or
	//$request->setComune('054039'); //Codice istat del comune
	output("Calling wmc meteo list using {$comune}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Meteo   $meteo
	 */
	foreach ($list as $meteo){
		print_r($meteo->toArray());
	}

	/**
	 * @var null|\Overplace\Paginator $paginator
	 */
	$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	// [...] loop until paginator is present and hasNextPage return true.
	while (isset($paginator) && $paginator->hasNextPage()){
		output("Calling meteo list using {$comune} - Page {$paginator->getPage()->getNext()}...");
		// Get next page results.
		// Return a Collection of meteo response.

		/**
		 * @var \Overplace\Collection $list
		 */
		$list = $paginator->getNextPage();

		/**
		 * Iterate over Meteo Collection
		 * @var \Overplace\Response\Meteo   $meteo
		 */
		foreach ($list as $meteo){
			print_r($meteo->toArray());
		}

		// Overwrite $paginator with next Response Collection Paginator
		$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	}
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>