<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        07/06/2017
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

	output("Initializing catalogo service...");
	$service = new \Overplace\Service\Wmc\Catalogo($client);
	// Creating request object for get list of catalogo object collection.
	$request = new \Overplace\Request\Wmc\Catalogo\Lists();
	$request->setIdWmc($wmc->getId());
	output("Calling wmc catalogo list using {$wmc->getTitolo()}...");
	$list = $service->getList($request);

	/**
	 * @var \Overplace\Response\Catalogo    $item, $catalogo
	 */
	$catalogo = null;
	foreach ($list as $item){
		if ($item->getStato()->getId() == 1 && $item->isVisibile()){
			$catalogo = $item;
			break;
		}
	}

	if (!isset($catalogo)){
		output("No catalogo active presents!");
		exit();
	}

	// Creating request object for get catalogo object.
	$request = new \Overplace\Request\Wmc\Catalogo\Get();
	$request->setIdWmc($wmc->getId());
	$request->setIdCatalogo($catalogo->getId());
	output("Calling wmc catalogo get using {$wmc->getTitolo()}...");
	$catalogo = $service->get($request);

	//print_r($catalogo->toArray());
	$categorie = $catalogo->getCategorie();

	if (isset($categorie)){
		/**
		 * @var \Overplace\Response\Catalogo\Categoria  $categoria
		 */
		foreach ($catalogo->getCategorie() as $categoria){
			output("Categoria: {$categoria->getTitolo()} - {$categoria->getStato()->getDescrizione()}");

			$sottocategorie = $categoria->getSottocategorie();

			if (isset($sottocategorie)){
				/**
				 * @var \Overplace\Response\Catalogo\Categoria  $sottocategoria
				 */
				foreach ($sottocategorie as $sottocategoria){
					output("Sottocategoria: {$sottocategoria->getTitolo()} - {$sottocategoria->getStato()->getDescrizione()}");

					$elementiSottocategoria = $sottocategoria->getElementi();

					if (isset($elementiSottocategoria)){
						/**
						 * @var \Overplace\Response\Catalogo\Elemento $elementoSottocategoria
						 */
						foreach ($elementiSottocategoria as $elementoSottocategoria){
							output("Elemento sottocategoria: {$elementoSottocategoria->getTitolo()} - {$elementoSottocategoria->getStato()->getDescrizione()}");
						}
					}
				}
			}

			$elementi = $categoria->getElementi();

			if (isset($elementi)){
				/**
				 * @var \Overplace\Response\Catalogo\Elemento   $elemento
				 */
				foreach ($elementi as $elemento){
					output("Elemento: {$elemento->getTitolo()} - {$elemento->getStato()->getDescrizione()}");
				}
			}
		}
	}else {
		output("Empty categorie");
	}

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>