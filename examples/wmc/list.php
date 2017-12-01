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
	// Call list of wmc
	// Return a Collection of wmc response.
	$list = $service->getList();

	/**
	 * Iterate over wmc Collection
	 * @var \Overplace\Response\Wmc $wmc
	 */
	foreach ($list as $wmc){
		output("{$wmc->getId()} - {$wmc->getTitolo()}");
	}

	/**
	 * @var null|\Overplace\Paginator $paginator
	 */
	$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;

	// [...] loop until paginator is present and hasNextPage return true.
	while (isset($paginator) && $paginator->hasNextPage()){
		// Get next page results.
		// Return a Collection of wmc response.

		/**
		 * @var \Overplace\Collection $list
		 */
		$list = $paginator->getNextPage();

		/**
		 * Iterate over wmc Collection
		 * @var \Overplace\Response\Wmc $wmc
		 */
		foreach ($list as $wmc){
			output("{$wmc->getId()} - {$wmc->getTitolo()}");
		}
		// Overwrite $paginator with next Response Collection Paginator
		$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	}

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) {$e->getMessage()}");
}

?>