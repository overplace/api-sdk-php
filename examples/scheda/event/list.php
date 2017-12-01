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
	// Creating request object for get list of storytelling object collection.
	$request = new \Overplace\Request\Trova\Lists();
	$request->setCosa("Hotel");
	$request->setDove("Perugia");
	$request->setLimit(5);
	output("Requesting trova list...");
	$list = $service->get($request);

	output("Initializing event service...");
	$eventService = new \Overplace\Service\Scheda\Event($client);

	/**
	 * @var \Overplace\Response\Scheda $scheda
	 */
	foreach ($list as $scheda){
		output($scheda->getTitolo());

		if ($scheda->getStato()->getId() == 1){
			//La scheda è attiva
			try {
				// Creating request object for get list of news object collection.
				$request = new \Overplace\Request\Scheda\Event\Lists();
				$request->setIdScheda($scheda->getId());
				output("Calling event list using {$scheda->getTitolo()}...");
				$eventList = $eventService->getList($request);

				setlocale(LC_TIME, "it-IT");
				/**
				 * @var \Overplace\Response\Event    $event
				 */
				foreach ($eventList as $event){
					$dataInizioEvento = \DateTime::createFromFormat(\DateTime::ATOM, $event->getDataInizioEvento());
					$dataFineEvento = \DateTime::createFromFormat(\DateTime::ATOM, $event->getDataFineEvento());
					output("{$event->getId()} - {$event->getTitolo()} ".
					"dalle {$dataInizioEvento->format("H:i")} di " . strftime("%A %B %Y", $dataInizioEvento->getTimestamp()) . " fino " .
					"alle {$dataFineEvento->format("H:i")} di " . strftime("%A %B %Y", $dataFineEvento->getTimestamp()));
				}

				/**
				 * @var null|\Overplace\Paginator $paginator
				 */
				$paginator = ($eventList->hasPaginator()) ? $eventList->getPaginator() : null;
				// [...] loop until paginator is present and hasNextPage return true.
				while (isset($paginator) && $paginator->hasNextPage()){
					output("Calling event list using {$scheda->getTitolo()} - Page {$paginator->getPage()->getNext()}...");
					// Get next page results.
					// Return a Collection of event response.

					/**
					 * @var \Overplace\Collection $eventList
					 */
					$eventList = $paginator->getNextPage();

					/**
					 * Iterate over Event Collection
					 * @var \Overplace\Response\Event    $event
					 */
					foreach ($eventList as $event){
						$dataInizioEvento = \DateTime::createFromFormat(\DateTime::ATOM, $event->getDataInizioEvento());
						$dataFineEvento = \DateTime::createFromFormat(\DateTime::ATOM, $event->getDataFineEvento());
						output("{$event->getId()} - {$event->getTitolo()} ".
							"dalle {$dataInizioEvento->format("H:i")} di " . strftime("%A %B %Y", $dataInizioEvento->getTimestamp()) . " fino " .
							"alle {$dataFineEvento->format("H:i")} di " . strftime("%A %B %Y", $dataFineEvento->getTimestamp()));
					}
					// Overwrite $paginator with next Response Collection Paginator
					$paginator = ($eventList->hasPaginator()) ? $eventList->getPaginator() : null;
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