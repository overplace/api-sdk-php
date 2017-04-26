<?php
require_once 'vendor/autoload.php';
require_once 'autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);
header("Content-type: text/plain; charset=utf-8");



try {
	$client = new \Overplace\Client([
		'app' => [
			'client_id' => 'testclientid',
			'client_secret' => 'testclientsecret'
		]
	]);
	$serviceWmc = new \Overplace\Service\Wmc($client);
	print_r($serviceWmc->getList());
	exit();
	//$wmcGetRequest = (new \Overplace\Request\WmcGet())->setIdScheda(8535);
	//$wmc = $serviceWmc->get($wmcGetRequest);
	$serviceNews = new Overplace\Service\News($client);
	$newsListRequest = (new \Overplace\Request\NewsList())->setIdScheda(8535)->setPage(1)->setLimit(10);
	$newsListRequest->addSortBy(\Overplace\Request\NewsList::SORT_BY_ID);
	$newsListRequest->addFilterAnd(\Overplace\Request\NewsList::FILTER_BY_STATE, \Overplace\Request::EQUAL_TO, "1");
	$newsList = $serviceNews->getList($newsListRequest);

	foreach ($newsList as $news){
		echo $news->id." - ".$news->titolo.PHP_EOL;
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
					echo $nextPaginator->nextPage . PHP_EOL;
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