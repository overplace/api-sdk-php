<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        17/05/2017
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
	 * @var \Overplace\Response\News $news
	 */
	$news = $list->current();

	// Creating request object for delete news object.
	$request = new \Overplace\Request\Wmc\News\Delete();
	$request->setIdWmc($wmc->getId());
	$request->setIdNews($news->getId());
	output("Calling wmc news delete using {$wmc->getTitolo()}... (true calling is commented to prevent delete)");
//	$response = $service->delete($request);
//	output($response->getMessage());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>