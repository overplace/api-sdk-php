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

	output("Initializing storytelling service...");
	$service = new \Overplace\Service\Wmc\Storytelling($client);

	// Creating request object for patch a storytelling.
	$request = new \Overplace\Request\Wmc\Storytelling\Patch();
	$request->setIdWmc($wmc->getId());
	//$request->setIdStory(78);
	//$request->setTitolo("GraphAPI Overplace - A new story");
	//$request->setDescrizione("Lorem ipsum dolor sit, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.");
	//$request->setIdFotoAnteprima(82281);
	//$request->setFoto(array(74798, 74797));
	$request->setVideo(array("https://www.youtube.com/watch?v=domlgq7dBHY"));
	output("Calling wmc storytelling create using {$wmc->getTitolo()}...");
	$story = $service->patch($request);

	print_r($story->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>