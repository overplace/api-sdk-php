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

	output("Initializing gallery service...");
	$galleryService = new \Overplace\Service\Scheda\Gallery($client);

	/**
	 * @var \Overplace\Response\Scheda $scheda
	 */
	foreach ($list as $scheda){
		output($scheda->getTitolo());

		if ($scheda->getStato()->getId() == 1){
			//La scheda è attiva
			try {
				// Creating request object for get list of foto object collection.
				$request = new \Overplace\Request\Scheda\Gallery\Lists();
				$request->setIdScheda($scheda->getId());
				output("Calling gallery list using {$scheda->getTitolo()}...");
				$galleryList = $galleryService->getList($request);
				/**
				 * @var \Overplace\Response\Foto    $foto
				 */
				foreach ($galleryList as $foto){
					output("{$foto->getId()} - {$foto->getUrl()->getOriginal()}");
				}

				/**
				 * @var null|\Overplace\Paginator $paginator
				 */
				$paginator = ($galleryList->hasPaginator()) ? $galleryList->getPaginator() : null;
				// [...] loop until paginator is present and hasNextPage return true.
				while (isset($paginator) && $paginator->hasNextPage()){
					output("Calling gallery list using {$scheda->getTitolo()} - Page {$paginator->getPage()->getNext()}...");
					// Get next page results.
					// Return a Collection of foto response.

					/**
					 * @var \Overplace\Collection $galleryList
					 */
					$galleryList = $paginator->getNextPage();

					/**
					 * Iterate over Foto Collection
					 * @var \Overplace\Response\Foto    $foto
					 */
					foreach ($galleryList as $foto){
						output("{$foto->getId()} - {$foto->getUrl()->getOriginal()}");
					}
					// Overwrite $paginator with next Response Collection Paginator
					$paginator = ($galleryList->hasPaginator()) ? $galleryList->getPaginator() : null;
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