$client = new \Overplace\Client([
	'app' => [
		'client_id' => 'Chiave pubblica',
		'client_secret' => 'Chiave privata'
	]
]);

$trovaService = new \Overplace\Service\Trova($client);

try {
    // Inizializzazione della classe request Trova\Lists per effettuare la ricerca in Overplace.
    $request = new \Overplace\Request\Trova\Lists();

    // Cosa ricercare in Overplace. Obbligatorio se non è presente il parametro dove.
    // Alias: $request->setCosa("Hotel Mario Rossi");
    $request->cosa = "Hotel Mario Rossi";

    // Dove devono trovarsi le schede in Overplace. Obbligatorio se non è presente il parametro cosa.
    // Alias: $request->setDove("Napoli");
    $request->dove = "Napoli";

    //Limite di schede da estrarre con una singola chiamata. Di default viene impostato 20.
    //Minimo: 1
    //Massimo: 50
    $request->setLimit(20);

    //E' possibile effettuare una ricerca per distanza in base ad un punto e la distanza massima.
    //Per effettuare una ricerca per distanza sono obbligatori i parametri latitudine, longitudine e distanza.
//	$request->setLatitudine(40.850796);
//	$request->setLongitudine(14.269603);
//	$request->setDistanza(25);

    //Imposta l'ordinamento dei risultati per distanza in modo ascendente. Dal più vicino
    //al più lontano.
//  $request->addSortBy($request::SORT_BY_DISTANCE, $request::ORDER_ASC);

    //Filtra le schede per il modulo CheckIn. Verranno ritornate solamente le schede che possiedono
    //il modulo CheckIn attivo.
//	$request->setModuli(array($request::HAS_CHECKIN));

	$schedeCollection = $trovaService->get($request);

    foreach ($schedeCollection as $scheda){
        echo "{$scheda->getId()} - {$scheda->getTitolo()}";
    }

    /**
     * @var null|\Overplace\Paginator $paginator
     */
    $paginator = ($schedeCollection->hasPaginator()) ? $schedeCollection->getPaginator() : null;

    // [...] loop until paginator is present and hasNextPage return true.
    while (isset($paginator) && $paginator->hasNextPage()){
        echo "Calling trova list - Page {$paginator->getPage()->getNext()}...";
        // Get next page results.
        // Return a Collection of Scheda response.

        /**
         * @var \Overplace\Collection $schedeCollection
         */
        $schedeCollection = $paginator->getNextPage();

        /**
         * Iterate over Schede Collection
         * @var \Overplace\Response\Scheda $scheda
         */
        foreach ($schedeCollection as $scheda){
            echo "{$scheda->getId()} - {$scheda->getTitolo()}";
        }

        // Overwrite $paginator with next Response Collection Paginator
        $paginator = ($schedeCollection->hasPaginator()) ? $schedeCollection->getPaginator() : null;
    }
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) {$e->getMessage()}");
}