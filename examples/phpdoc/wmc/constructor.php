$client = new \Overplace\Client([
	'app' => [
		'client_id' => 'Chiave pubblica',
		'client_secret' => 'Chiave privata'
	]
]);

$wmcService = new \Overplace\Service\Wmc($client);