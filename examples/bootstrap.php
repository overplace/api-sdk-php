<?php
/**
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * Date:        17/05/2017
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';
require_once dirname(__DIR__) . '/autoload.php';

ini_set("date.timezone", "Europe/Berlin");
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (!ob_start()){
	function output ($msg)
	{
		echo $msg . PHP_EOL;
	}
}else {
	function output ($msg)
	{
		echo $msg . PHP_EOL;
		ob_flush();
		flush();
	}
}

try {
	// Client initialization
	$client = new \Overplace\Client([
		'app' => [
			'client_id' => 'b9a32578770a4e9c8015683d9',
			'client_secret' => '71f050942a55bb0812814bb21c7038e0c0aeac2c47'
		]
	]);
}catch (\Overplace\Exception\Sdk $e){
	die($e->getMessage());
}

