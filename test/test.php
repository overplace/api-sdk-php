<?php
require_once '../vendor/autoload.php';
require_once '../autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
header("Content-type: text/plain; charset=utf-8");


try {
	// Client initialization
	$client = new \Overplace\Client([
		'app' => [
			'client_id' => 'testclientid',
			'client_secret' => 'testclientsecret'
		]
	]);

	$menuService = new \Overplace\Service\Menu($client);
	$menuLists = new \Overplace\Request\Menu\Lists();
	$menuLists->setIdScheda(8535);
	$lists = $menuService->getList($menuLists);

	$menuGet = new \Overplace\Request\Menu\Get();
	$menuGet->setIdScheda(8535);

	/**
	 * @var $menu \Overplace\Response\Menu
	 */
	foreach ($lists as $menu){
		//$menuGet->setIdMenu($menu->getId());
		$menuGet->setIdMenu(3);
		$dettaglioMenu = $menuService->get($menuGet);
		print_r($dettaglioMenu);
		echo str_repeat("=", 50) . PHP_EOL;
		exit();
	}

//	print_r($lists);

	exit();



	$recensioniService = new \Overplace\Service\Recensioni($client);
	$recensioniLists = new \Overplace\Request\Recensioni\Lists();
	$recensioniLists->setIdScheda(8535)->setLimit(100);
	$lists = $recensioniService->getList($recensioniLists);

	print_r($lists);

	exit();

	$couponService = new \Overplace\Service\Coupon($client);
	$couponLists = new \Overplace\Request\Coupon\Lists();
	$couponLists->setIdScheda(8535)->setLimit(100);
	$lists = $couponService->getList($couponLists);

	/**
	 * @var $coupon \Overplace\Response\Coupon
	 */
	foreach ($lists as $coupon){
		echo $coupon->getId() . " - " . $coupon->getTitolo() . " - dal " . $coupon->getDataInizioErogazione() . " al " . $coupon->getDataFineErogazione() .  PHP_EOL;
	}

	print_r($lists);

	exit();


	$ricettaService = new \Overplace\Service\Ricette($client);
	$ricettaLists = new \Overplace\Request\Ricette\Lists();
	$ricettaLists->setIdScheda(8535);
	$lists = $ricettaService->getList($ricettaLists);

	/**
	 * @var $ricetta \Overplace\Response\Ricette
	 */
	foreach ($lists as $ricetta){
		echo $ricetta->getId() . " - " . $ricetta->getTitolo() . " - " . ($ricetta->isVisibile() ? "Pubblicata" : "Non pubblicata") .  PHP_EOL;
	}

	print_r($lists);

	exit();
	$storytellingService = new \Overplace\Service\Storytelling($client);
	$storyLists = new \Overplace\Request\Storytelling\Lists();
	$storyLists->setIdScheda(8535);
	$lists = $storytellingService->getList($storyLists);

	/**
	 * @var $story \Overplace\Response\Storytelling
	 */
	foreach ($lists as $story){
		echo $story->getId() . " - " . $story->getTitolo() . PHP_EOL;
		$videos = $story->getVideo();
		if ($videos){
			/**
			 * @var $video \Overplace\Response\Video
			 */
			foreach ($videos as $video){
				echo "id video: " . $video->getId() . " - url: " . $video->getUrl() . PHP_EOL;
			}
		}
	}

	print_r($lists);

	exit();
	$galleryService = new \Overplace\Service\Gallery($client);
	$galleryList = new \Overplace\Request\Gallery\Lists();
	$galleryList->setIdScheda(8535)->setLimit(2);
	$galleryList->addFilterAnd(1,$galleryList::GREATER_THAN, 1);
	$lists = $galleryService->getList($galleryList);

	/**
	 * @var $foto   \Overplace\Response\Foto
	 */
	foreach ($lists as $foto){
		echo $foto->getId() . " - " . $foto->getUrl() . PHP_EOL;
	}

	print_r($lists);

	if ($lists->hasPaginator()){
		$paginator = $lists->getPaginator();
		if ($paginator->hasNextPage()){
			$lists = $paginator->getNextPage();
			foreach ($lists as $foto){
				echo $foto->getId() . " - " . $foto->getUrl() . PHP_EOL;
			}
			print_r($lists);
		}
	}
	exit();
	$meteoService = new \Overplace\Service\Meteo($client);
	$meteoLists = new \Overplace\Request\Meteo\Lists();
	$meteoLists->setIdScheda(8535);
	$lists = $meteoService->getList($meteoLists);

	/**
	 * @var $meteo \Overplace\Response\Meteo
	 */
	foreach ($lists as $meteo){
		echo $meteo->getId() . " - " . $meteo->getCondition() . PHP_EOL;
	}

	print_r($lists);
	exit();
	// Promozioni
	$promozioniService = new \Overplace\Service\Promozioni($client);
	$checkinLists = new \Overplace\Request\Promozioni\Lists();
	$checkinLists->setIdScheda(8535);
	$lists = $promozioniService->getList($checkinLists);

	print_r($lists);

	/**
	 * @var $promozione \Overplace\Response\Promozioni
	 */
	foreach ($lists as $promozione){
		echo $promozione->getId() . " - " . $promozione->getDescrizione() . PHP_EOL;
	}

	exit();

	// Eventi
	$serviceEvents = new \Overplace\Service\Event($client);
	$eventsListRequest = new \Overplace\Request\Event\Lists();
	$eventsListRequest->setIdScheda(8535);
	$lists = $serviceEvents->getList($eventsListRequest);

	/**
	 * PHPdoc for IDE autocomplete.
	 * @var $event \Overplace\Response\Event
	 */
	foreach ($lists as $event){
		echo $event->getId() . " - " . $event->getTitolo() . " dal " . $event->getDataInizioEvento() . " al " . $event->getDataFineEvento() . PHP_EOL;
	}
	print_r($lists);
	exit();

	// News
	$serviceNews = new Overplace\Service\News($client);
	$newsGet = new \Overplace\Request\News\Get();
	$newsGet->setIdScheda(8535)->setIdNews(19805);
	$news = $serviceNews->get($newsGet);
	print_r($news);
	exit();

	$newsListRequest = (new \Overplace\Request\News\Lists())->setIdScheda(8535)->setPage(1)->setLimit(10);
	$newsListRequest->addSortBy($newsListRequest::SORT_BY_ID);
	$newsListRequest->addFilterAnd($newsListRequest::FILTER_BY_STATE, $newsListRequest::EQUAL_TO, "1");
	$newsList = $serviceNews->getList($newsListRequest);

	foreach ($newsList as $news){
		print_r($news);
		exit();
	}

	if ($newsList->hasPaginator()){
		$paginator = $newsList->getPaginator();
		print_r($paginator);
		if ($paginator->hasNextPage()){
			echo "=========================" . PHP_EOL;
			echo "Pagina 2" . PHP_EOL;
			echo "=========================" . PHP_EOL;

			$otherNewsList = $paginator->getNextPage();
			foreach ($otherNewsList as $news){
				echo $news->id . " - " . $news->titolo . PHP_EOL;
			}

			if ($otherNewsList->hasPaginator()){
				$nextPaginator = $otherNewsList->getPaginator();
				print_r($nextPaginator);
				exit();
				if ($nextPaginator->hasNextPage()){
					echo "=========================" . PHP_EOL;
					echo "Prossima pagina" . PHP_EOL;
					//echo $nextPaginator->nextPage . PHP_EOL;
					echo "=========================" . PHP_EOL;
				}
			}
		}else {
			exit("alsnkdklnasd");
		}

	}


}catch (\Overplace\Exception\Service $e){
	echo $e->getMessage();
}

?>