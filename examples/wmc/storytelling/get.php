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

	output("Initializing storytelling service...");
	$service = new \Overplace\Service\Wmc\Storytelling($client);
	// Creating request object for get list of storytelling object collection.
	$request = new \Overplace\Request\Wmc\Storytelling\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc storytelling list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Storytelling    $storytelling
	 */
	//$storytelling = $list->current();
	foreach ($list as $story){
		if ($story->getId() == 7){
			$storytelling = $story;
			break;
		}
	}
	// Creating request object for get storytelling object.
	$request = new \Overplace\Request\Wmc\Storytelling\Get();
	$request->setIdWmc($wmc->getId());
	$request->setIdStory($storytelling->getId());
	output("Calling wmc news get using {$wmc->getTitolo()}...");
	$storytelling = $service->get($request);

	print_r($storytelling->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>