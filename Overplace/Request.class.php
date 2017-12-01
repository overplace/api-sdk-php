<?php

namespace Overplace;

/**
 * Class Request.
 *
 * Classe principale per creare una richiesta da inviare al server.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Request
 * @namespace   Overplace
 * @package     Overplace
 */
class Request
{

	/**
	 * Request constructor.
	 *
	 * @access  public
	 */
	public function __construct ()
	{

	}

	/**
	 * Convert object to array.
	 *
	 * Converte l'oggetto Request in un array con solo le proprietà che possiedono
	 * un valore.
	 *
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$properties = array_filter(get_object_vars($this));
		$keys = array_keys($properties);
		$len = count($keys);

		for ($i = 0; $i < $len; $i++){
			if ($properties[$keys[$i]] instanceof \Overplace\Request\Resource || $properties[$keys[$i]] instanceof \Overplace\Request\Resource\Collection){
				$properties[$keys[$i]] = $properties[$keys[$i]]->toArray();
			}
		}

		return $properties;
	}

}

?>