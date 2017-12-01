<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        08/06/2017
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
	// Creating request object for patch an event.
	$request = new \Overplace\Request\Wmc\Event\Patch();
	$request->setIdWmc($wmc->getId());
	$request->setIdEvent(5492);
	$request->setTitolo("Fantastic event from GraphAPI!");
	//$request->setDescrizione("Fantastic event created from GraphAPI Overplace! Come and explore new Overplace API!");
	//$request->setIdFoto(135417);
	//$request->setDataInizioEvento((new \DateTime('+1 days', (new \DateTimeZone('Asia/Shanghai'))))->format(\DateTime::ATOM));
	//$request->setDataFineEvento((new \DateTime('+5 days'))->format(\DateTime::ATOM));
	output("Calling wmc event patch using {$wmc->getTitolo()}...");
	$event = $service->patch($request);

	print_r($event->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>