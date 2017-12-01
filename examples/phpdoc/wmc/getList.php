$client = new \Overplace\Client([
	'app' => [
		'client_id' => 'Chiave pubblica',
		'client_secret' => 'Chiave privata'
	]
]);

$wmcService = new \Overplace\Service\Wmc($client);

try {
	$wmcCollection = $wmcService->getList();

	/**
	 * @var \Overplace\Response\Wmc $wmc
	 */
	foreach ($wmcCollection as $wmc){
		echo "{$wmc->getId()} - {$wmc->getTitolo()}";
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
		 * @var \Overplace\Collection $wmcCollection
		 */
		$wmcCollection = $paginator->getNextPage();

		/**
		 * Iterate over wmc Collection
		 * @var \Overplace\Response\Wmc $wmc
		 */
		foreach ($wmcCollection as $wmc){
			echo "{$wmc->getId()} - {$wmc->getTitolo()}";
		}

		// Overwrite $paginator with next Response Collection Paginator
		$paginator = ($wmcCollection->hasPaginator()) ? $wmcCollection->getPaginator() : null;
	}
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) {$e->getMessage()}");
}