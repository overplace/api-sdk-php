<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        13/06/2017
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

	output("Initializing coupon service...");
	$service = new \Overplace\Service\Wmc\Coupon($client);
	// Creating request object for create coupon.
	$request = new \Overplace\Request\Wmc\Coupon\Create();
	$request->setIdWmc($wmc->getId());
	$request->setIdFoto(73149);
	$request->setTitolo("New Coupon from GraphAPI Overplace!");
	$request->setDescrizione("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.");
	$request->setCondizioniLegali("Valid coupon on a minimum spend of 20€");
	$request->setSconto("25%");
	$request->setNumeroErogabili(50);
//	OR
//	$request->setIllimitati(true);
	$request->setDataInizioErogazione((new \DateTime('+1 days'))->format("Y-m-d"));
	$request->setDataFineErogazione((new \DateTime('+15 days'))->format("Y-m-d"));
	$request->setShareOnFacebook(true);
	output("Calling wmc coupon create using {$wmc->getTitolo()}...");
	$coupon = $service->create($request);

	print_r($coupon->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>