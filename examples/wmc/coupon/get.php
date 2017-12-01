<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        12/06/2017
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
	// Creating request object for get list of coupon object collection.
	$request = new \Overplace\Request\Wmc\Coupon\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc coupon list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Coupon  $current
	 */
	$current = $list->current();

	// Creating request object for get coupon object.
	$request = new \Overplace\Request\Wmc\Coupon\Get();
	$request->setIdWmc($wmc->getId());
	$request->setIdCoupon($current->getId());
	output("Calling wmc coupon get using {$wmc->getTitolo()}...");
	$coupon = $service->get($request);

	print_r($coupon->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>