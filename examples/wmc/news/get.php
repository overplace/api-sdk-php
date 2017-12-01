<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        05/06/2017
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

	output("Initializing news service...");
	$service = new \Overplace\Service\Wmc\News($client);
	// Creating request object for get list of news object collection.
	$request = new \Overplace\Request\Wmc\News\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc news list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\News    $news
	 */
	$news = $list->current();

	// Creating request object for get news object.
	$request = new \Overplace\Request\Wmc\News\Get();
	$request->setIdWmc($wmc->getId());
	$request->setIdNews($news->getId());
	output("Calling wmc news get using {$wmc->getTitolo()}...");
	$news = $service->get($request);

	print_r($news->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>