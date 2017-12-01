# Overplace API - SDK php

## Installazione

La libreria può essere installata tramite il composer

```
composer require overplace/api-sdk-php
```

oppure scaricata come zip ed installata manualmente. In questo caso dovrà essere incluso il file di autoload della libreria.

```php
<?php
require_once('path/to/api-sdk-php/autoload.php');

// Start use it!!
```

## Utilizzo

Per utilizzare la libreria si dovranno avere a disposizione la chiave pubblica e privata generate tramite il portale [https://developers.overplace.com](https://developers.overplace.com). Una volta che si possiedono le chiavi si potrà inizializzare il client della libreria.

```php
// Client initialization
$client = new \Overplace\Client([
    'app' => [
        'client_id' => '<your_public_key>',
        'client_secret' => '<your_private_key>'
    ]
]);
```

Tramite il client sarà possibile utilizzare gli oggetti Service ed effettuare le chiamate ad Overplace.

```php
$service = new \Overplace\Service\Wmc($client);
// Call list of wmc and return a Collection of wmc response.
$list = $service->getList();
```

Per ulteriori esempi ti consigliamo di consultare i files di esempio all'interno della cartella examples.