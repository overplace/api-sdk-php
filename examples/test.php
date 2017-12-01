<?php

include_once 'bootstrap.php';

try {
	output("Initializing wmc service....");
	$service = new \Overplace\Service\Wmc($client);
	// Call list of wmc
	// Return a Collection of wmc response.
	$list = $service->getList();

	/**
	 * @var null|\Overplace\Paginator $paginator
	 */
	$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
	do {
		/**
		 * Iterate over wmc Collection
		 * @var \Overplace\Response\Wmc $wmc
		 */
		foreach ($list as $wmc){
			output("{$wmc->getId()} - {$wmc->getTitolo()}");

			output(str_repeat("-", 50));
			output("Get {$wmc->getTitolo()} news...");

			output("Initializing news service...");
			$serviceNews = new \Overplace\Service\News($client);
			// Creating request object for get list of news object collection.
			$requestNews = new \Overplace\Request\News\Lists();
			$requestNews->setIdScheda($wmc->getId());
			/**
			 * @var \Overplace\Collection   $listNews
			 */
			$listNews = $serviceNews->getList($requestNews);

			/**
			 * @var null|\Overplace\Paginator $paginatorNews
			 */
			$paginatorNews = ($listNews->hasPaginator()) ? $listNews->getPaginator() : null;

			do {
				/**
				 * Iterate over News Collection
				 * @var \Overplace\Response\News    $news
				 */
				foreach ($listNews as $news){
					output("{$news->getId()} - {$news->getTitolo()}");
				}

				if ($paginatorNews->hasNextPage()){
					// Overwrite $paginatorNews with next Response Collection Paginator
					$listNews = $paginatorNews->getNextPage();
					$paginatorNews = ($listNews->hasPaginator()) ? $listNews->getPaginator() : null;
				}else {
					$paginatorNews = null;
				}

				// [...] loop until paginator is present.
			}while (isset($paginatorNews));

			output("Finish read {$wmc->getTitolo()} news...");
			output(str_repeat("-", 50));

			output("Get {$wmc->getTitolo()} meteo...");

			output("Initializing meteo service...");
			$serviceMeteo = new \Overplace\Service\Meteo($client);
			// Creating request object for get list of news object collection.
			$requestMeteo = new \Overplace\Request\Meteo\Lists();
			$requestMeteo->setIdScheda($wmc->getId());
			/**
			 * @var \Overplace\Collection   $listMeteo
			 */
			$listMeteo = $serviceMeteo->getList($requestMeteo);

			/**
			 * @var null|\Overplace\Paginator $paginatorMeteo
			 */
			$paginatorMeteo = ($listMeteo->hasPaginator()) ? $listMeteo->getPaginator() : null;

			do {
				/**
				 * Iterate over Meteo Collection
				 * @var \Overplace\Response\Meteo    $meteo
				 */
				foreach ($listMeteo as $meteo){
					output("A {$wmc->getIndirizzo()->getComune()} il {$meteo->getData()} il tempo sarà {$meteo->getCondition()}");
				}

				if ($paginatorMeteo->hasNextPage()){
					// Overwrite $paginatorNews with next Response Collection Paginator
					$listMeteo = $paginatorMeteo->getNextPage();
					$paginatorMeteo = ($listMeteo->hasPaginator()) ? $listMeteo->getPaginator() : null;
				}else {
					$paginatorMeteo = null;
				}

				// [...] loop until paginator is present.
			}while (isset($paginatorMeteo));

			output("Finish read {$wmc->getTitolo()} meteo...");
			output(str_repeat("-", 50));

		}

		/**
		 * @var \Overplace\Collection $list
		 */
		if ($paginator->hasNextPage()){
			// Get next page results.
			// Return a Collection of wmc response.
			$list = $paginator->getNextPage();
			// Overwrite $paginator with next Response Collection Paginator
			$paginator = ($list->hasPaginator()) ? $list->getPaginator() : null;
		}else {
			$paginator = null;
		}
		// [...] loop until paginator is present and hasNextPage return true.
	} while (isset($paginator));
}catch (\Overplace\Exception\Service $e){
	print_r($e->getTrace());
	die("({$e->getCode()}) {$e->getMessage()}");
}

?>