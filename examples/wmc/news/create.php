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
	// Creating request object for create news.
	$request = new \Overplace\Request\Wmc\News\Create();
	$request->setIdWmc($wmc->getId());
	$request->setIdFoto(116327);
	$request->setTitolo("News via GraphAPI");
	$request->setMessaggio("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa...");
//	$request->setShareOnFacebook(true); // Set true to share news on facebook.
//	$request->setShareOnTwitter(true); // Set true to share news on twitter.
//	$request->setShareOnLinkedIn(true); // Set true to share news on linkedin.
//	$request->setDataPubblicazione((new \DateTime('+3 days'))->format(\DateTime::ATOM)); // Set publish date to specify when publish the news. Twitter and Linkedin share immediately.
	output("Calling wmc news create using {$wmc->getTitolo()}...");
	//Return create news object.
	$news = $service->create($request);
	print_r($news->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>