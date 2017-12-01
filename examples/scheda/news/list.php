<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        17/05/2017
 */
include_once dirname(dirname(__DIR__)) . '/bootstrap.php';

try {

	output("Initializing trova service....");
	$service = new \Overplace\Service\Trova($client);
	// Creating request object for get list of storytelling object collection.
	$request = new \Overplace\Request\Trova\Lists();
	$request->setCosa("Hotel");
	$request->setDove("Perugia");
	$request->setLimit(5);
	output("Requesting trova list...");
	$list = $service->get($request);

	output("Initializing news service...");
	$newsService = new \Overplace\Service\Scheda\News($client);

	/**
	 * @var \Overplace\Response\Scheda $scheda
	 */
	foreach ($list as $scheda){
		output($scheda->getTitolo());

		if ($scheda->getStato()->getId() == 1){
			//La scheda è attiva
			try {
				// Creating request object for get list of news object collection.
				$request = new \Overplace\Request\Scheda\News\Lists();
				$request->setIdScheda($scheda->getId());
				output("Calling news list using {$scheda->getTitolo()}...");
				$newsList = $newsService->getList($request);
				/**
				 * @var \Overplace\Response\News    $news
				 */
				foreach ($newsList as $news){
					output("{$news->getId()} - {$news->getTitolo()}");
				}

				/**
				 * @var null|\Overplace\Paginator $paginator
				 */
				$paginator = ($newsList->hasPaginator()) ? $newsList->getPaginator() : null;
				// [...] loop until paginator is present and hasNextPage return true.
				while (isset($paginator) && $paginator->hasNextPage()){
					output("Calling news list using {$scheda->getTitolo()} - Page {$paginator->getPage()->getNext()}...");
					// Get next page results.
					// Return a Collection of news response.

					/**
					 * @var \Overplace\Collection $newsList
					 */
					$newsList = $paginator->getNextPage();

					/**
					 * Iterate over News Collection
					 * @var \Overplace\Response\News    $news
					 */
					foreach ($newsList as $news){
						output("{$news->getId()} - {$news->getTitolo()}");
					}
					// Overwrite $paginator with next Response Collection Paginator
					$paginator = ($newsList->hasPaginator()) ? $newsList->getPaginator() : null;
				}
			}catch (\Overplace\Exception\Service $ex){
				output("La scheda {$scheda->getTitolo()} ha risposto il seguente errore: {$ex->getMessage()}");
			}
		}

	}
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>