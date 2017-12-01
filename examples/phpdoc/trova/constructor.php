$client = new \Overplace\Client([
	'app' => [
		'client_id' => 'Chiave pubblica',
		'client_secret' => 'Chiave privata'
	]
]);

$trovaService = new \Overplace\Service\Trova($client);