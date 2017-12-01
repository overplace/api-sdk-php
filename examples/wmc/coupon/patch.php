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
	$service = new \Overplace\Service\Coupon($client);

	// Creating request object for get list of coupon object collection.
	$request = new \Overplace\Request\Coupon\Lists();
	$request->setIdScheda($wmc->getId());
	output("Calling wmc coupon list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Coupon  $coupon
	 */
	$coupon = $list->current();

	// Creating request object for patch coupon.
	$request = new \Overplace\Request\Coupon\Patch();
	$request->setIdScheda($wmc->getId());
	$request->setIdCoupon($coupon->getId());
	$request->setTitolo($coupon->getTitolo() . " - GraphAPI Overplace");
//	$request->setDataInizioErogazione((new \DateTime('+2 days'))->format('Y-m-d'));
//	$request->setDataFineErogazione((new \DateTime('+17 days'))->format('Y-m-d'));
	output("Calling wmc coupon patch using {$wmc->getTitolo()}...");
	$coupon = $service->patch($request);

	print_r($coupon->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>