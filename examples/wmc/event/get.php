<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        06/06/2017
 */
include_once dirname(dirname(__DIR__)) . '/bootstrap.php';

try {
	output("Initializing wmc service....");
	$service = new \Overplace\Service\Wmc($client);
	output("Requesting wmc list...");
	$list = $service->getList();

	// Get first wmc
	/**
	 * @var \Overplace\Response\Wmc $wmc
	 */
	$wmc = $list->current();

	output("Initializing event service...");
	$service = new \Overplace\Service\Wmc\Event($client);
	// Creating request object for get list of event object collection.
	$request = new \Overplace\Request\Wmc\Event\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc event list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Event    $event
	 */
	$event = $list->current();

	// Creating request object for get event object.
	$request = new \Overplace\Request\Wmc\Event\Get();
	$request->setIdWmc($wmc->getId());
	$request->setIdEvent($event->getId());
	output("Calling wmc event get using {$wmc->getTitolo()}...");
	$event = $service->get($request);

	print_r($event->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>