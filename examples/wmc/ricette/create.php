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

	output("Initializing ricette service...");
	$service = new \Overplace\Service\Wmc\Ricette($client);
	// Creating request object for create recipe.
	$request = new \Overplace\Request\Wmc\Ricette\Create();
	$request->setIdWmc($wmc->getId());
	$request->setTitolo("Recipe from GraphAPI!");
	$request->setDescrizione("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.");
	$request->setPreparazione("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.");
	$request->setConsigli("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.");
	$request->setVisibile(true);

	$ingredienti = new \Overplace\Request\Resource\Ricette\Ingredienti();
	$ingrediente = new \Overplace\Request\Resource\Ricette\Ingrediente();
	$ingrediente->nome = "Flour";
	$ingrediente->dose = "1 Kg";

	$ingredienti->add($ingrediente);

	$ingrediente = new \Overplace\Request\Resource\Ricette\Ingrediente();
	$ingrediente->nome = "Water";
	$ingrediente->dose = "1/2 l";

	$ingredienti->add($ingrediente);

	$request->setIngredienti($ingredienti);

	$dati = new \Overplace\Request\Resource\Ricette\Dati();
	$dati->costo = 1;
	$dati->cottura = 15;
	$dati->preparazione = 5;
	$dati->difficolta = 1;
	$dati->dosi = 3;

	$request->setDati($dati);

	$allergeni = new \Overplace\Request\Resource\Allergeni();
	$allergene = new \Overplace\Request\Resource\Allergene();

	$allergene->id = 1;

	$allergeni->add($allergene);

	$allergene = new \Overplace\Request\Resource\Allergene();
	$allergene->id = 5;

	$allergeni->add($allergene);

	$request->setAllergeni($allergeni);

	$request->setFoto(array(69399, 82117, 82338));
	$request->setAllegato(168);

	output("Calling wmc ricette create using {$wmc->getTitolo()}...");
	$ricetta = $service->create($request);

	print_r($ricetta->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>