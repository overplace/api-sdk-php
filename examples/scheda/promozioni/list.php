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
	$request->setModuli(array($request::HAS_CHECKIN));
	$request->setLimit(5);
	output("Requesting trova list...");
	$list = $service->get($request);

	output("Initializing news service...");
	$promozioniService = new \Overplace\Service\Scheda\Promozioni($client);

	/**
	 * @var \Overplace\Response\Scheda $scheda
	 */
	foreach ($list as $scheda){
		output($scheda->getTitolo());

		if ($scheda->getStato()->getId() == 1){
			//La scheda è attiva
			try {
				// Creating request object for get list of news object collection.
				$request = new \Overplace\Request\Scheda\Promozioni\Lists();
				$request->setIdScheda($scheda->getId());
				output("Calling promozioni list using {$scheda->getTitolo()}...");
				$promozioniList = $promozioniService->getList($request);
				/**
				 * @var \Overplace\Response\Promozione    $promozione
				 */
				foreach ($promozioniList as $promozione){
					output("{$promozione->getId()} - {$promozione->getDescrizione()}");
				}

				/**
				 * @var null|\Overplace\Paginator $paginator
				 */
				$paginator = ($promozioniList->hasPaginator()) ? $promozioniList->getPaginator() : null;
				// [...] loop until paginator is present and hasNextPage return true.
				while (isset($paginator) && $paginator->hasNextPage()){
					output("Calling promozioni list using {$scheda->getTitolo()} - Page {$paginator->getPage()->getNext()}...");
					// Get next page results.
					// Return a Collection of promozione response.

					/**
					 * @var \Overplace\Collection $promozioniList
					 */
					$promozioniList = $paginator->getNextPage();

					/**
					 * Iterate over Promozione Collection
					 * @var \Overplace\Response\Promozione    $promozione
					 */
					foreach ($promozioniList as $promozione){
						output("{$promozione->getId()} - {$promozione->getDescrizione()}");
					}
					// Overwrite $paginator with next Response Collection Paginator
					$paginator = ($promozioniList->hasPaginator()) ? $promozioniList->getPaginator() : null;
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