<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        21/06/2017
 */
include_once dirname(dirname(__DIR__)) . '/bootstrap.php';

try {

	output("Initializing trova service....");
	$service = new \Overplace\Service\Trova($client);
	
	$request = new \Overplace\Request\Trova\Lists();
	$request->setCosa("Hotel");
	$request->setDove("Perugia");
	$request->setLimit(5);
	output("Requesting trova list...");
	$list = $service->get($request);

	output("Initializing recensioni service...");
	$recensioniService = new \Overplace\Service\Scheda\Recensioni($client);

	/**
	 * @var \Overplace\Response\Scheda $scheda
	 */
	foreach ($list as $scheda){
		output($scheda->getTitolo());

		if ($scheda->getStato()->getId() == 1){
			//La scheda è attiva
			try {
				// Creating request object for get list of recensioni object collection.
				$request = new \Overplace\Request\Scheda\Recensioni\Lists();
				$request->setIdScheda($scheda->getId());
				output("Calling recensioni list using {$scheda->getTitolo()}...");
				$recensioniList = $recensioniService->getList($request);
				/**
				 * @var \Overplace\Response\Recensioni    $recensione
				 */
				foreach ($recensioniList as $recensione){
					output("{$recensione->getId()} - {$recensione->getAutore()->getUsername()} ha scritto: {$recensione->getCommento()}");
				}

				/**
				 * @var null|\Overplace\Paginator $paginator
				 */
				$paginator = ($recensioniList->hasPaginator()) ? $recensioniList->getPaginator() : null;
				// [...] loop until paginator is present and hasNextPage return true.
				while (isset($paginator) && $paginator->hasNextPage()){
					output("Calling promozioni list using {$scheda->getTitolo()} - Page {$paginator->getPage()->getNext()}...");
					// Get next page results.
					// Return a Collection of recensione response.

					/**
					 * @var \Overplace\Collection $recensioniList
					 */
					$recensioniList = $paginator->getNextPage();

					/**
					 * Iterate over Recensioni Collection
					 * @var \Overplace\Response\Recensioni    $recensione
					 */
					foreach ($recensioniList as $recensione){
						output("{$recensione->getId()} - {$recensione->getAutore()->getUsername()} ha scritto: {$recensione->getCommento()}");
					}
					// Overwrite $paginator with next Response Collection Paginator
					$paginator = ($recensioniList->hasPaginator()) ? $recensioniList->getPaginator() : null;
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