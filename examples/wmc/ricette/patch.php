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
	// Creating request object for patch recipe.
	$request = new \Overplace\Request\Wmc\Ricette\Patch();
	$request->setIdWmc($wmc->getId());
	$request->setIdRicetta(51);
	$request->setTitolo("Recipe update from GraphAPI!");
	$request->setDescrizione("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.");
	$request->setPreparazione("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.");
	$request->setConsigli("Lorem ipsum dolor sit amet, consectetuer adipiscing elit.");
	$request->setVisibile(false);

	$ingredienti = new \Overplace\Request\Resource\Ricette\Ingredienti();
	$ingrediente = new \Overplace\Request\Resource\Ricette\Ingrediente();
	$ingrediente->nome = "Farina";
	$ingrediente->dose = "1 Kg";

	$ingredienti->add($ingrediente);

	$ingrediente = new \Overplace\Request\Resource\Ricette\Ingrediente();
	$ingrediente->nome = "Acqua";
	$ingrediente->dose = "1/2 l";

	$ingredienti->add($ingrediente);

	$request->setIngredienti($ingredienti);

	$dati = new \Overplace\Request\Resource\Ricette\Dati();
	$dati->costo = 3;
	$dati->cottura = 45;
	$dati->preparazione = 15;
	$dati->difficolta = 4;
	$dati->dosi = 5;

	$request->setDati($dati);

	$allergeni = new \Overplace\Request\Resource\Allergeni();
	$allergene = new \Overplace\Request\Resource\Allergene();

	$allergene->id = 4;

	$allergeni->add($allergene);

	$allergene = new \Overplace\Request\Resource\Allergene();
	$allergene->id = 7;

	$allergeni->add($allergene);

	$request->setAllergeni($allergeni);

//	$request->setFoto(array(69399, 82117, 82338));
//	$request->setAllegato(168);

	output("Calling wmc ricette patch using {$wmc->getTitolo()}...");
	$ricetta = $service->patch($request);

	print_r($ricetta->toArray());

}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) - {$e->getMessage()}");
}

?>