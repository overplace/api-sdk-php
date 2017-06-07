<?php

if (version_compare(PHP_VERSION, '5.5.0', '<')){
	die("Overplace Sdk requires php 5.5.0 version or higher");
}

/**
 * Overplace Sdk Autoload.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        OverplaceSdkAutoload
 * @param       string  $classname  Class name.
 */
function OverplaceSdkAutoload ($classname)
{
	if (strpos($classname, "Overplace") !== 0){
		return;
	}

	$ext = array(".class.php", ".interface.php", ".abstract.php", ".php");
	$file = dirname(__FILE__) . "/" . str_replace("\\", "/", $classname);
	$len = count($ext);
	for ($i = 0; $i < $len; $i++){
		if (file_exists($file.$ext[$i])){
			require_once $file.$ext[$i];
			break;
		}
	}
}

// Register autoload
spl_autoload_register("OverplaceSdkAutoload");

?>