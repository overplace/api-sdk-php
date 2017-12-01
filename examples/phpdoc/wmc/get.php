$client = new \Overplace\Client([
	'app' => [
		'client_id' => 'Chiave pubblica',
		'client_secret' => 'Chiave privata'
	]
]);

$wmcService = new \Overplace\Service\Wmc($client);

// Id Wmc salvato in precedenza e recuperato per l'utilizzo.
$idWmc = 0;

try {
    // Inizializzazione della classe Wmc\Get per la richiesta.
    $request = new \Overplace\Request\Wmc\Get();
    $request->setIdWmc($idWmc);
	$wmc = $wmcService->get($request);

    print_r($wmc->toArray());
}catch (\Overplace\Exception\Service $e){
	die("({$e->getCode()}) {$e->getMessage()}");
}