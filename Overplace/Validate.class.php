<?php

namespace Overplace;

/**
 * Class Validate.
 *
 * Classe principale per la validazione delle request.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Validate
 * @namespace   Overplace
 * @package     Overplace
 */
class Validate
{

	/**
	 * Validate constructor.
	 *
	 * Costruttore della classe Validate.
	 *
	 * @access  public
	 */
	public function __construct ()
	{

	}

	/**
	 * Validate request object for specific request.
	 *
	 * Effettua la validazione di un oggetto Request in base al metodo chiamato.
	 * Lancia un Service Exception se il metodo richiesto non esiste nella classe Validate.
	 * Ritorna true se la classe Request contiene tutti i parametri obbligatori, altrimenti false.
	 *
	 * @final
	 * @access  public
	 * @throws  \Overplace\Exception\Service
	 * @param   string              $method     Method name
	 * @param   \Overplace\Request  $object     Instance of Request Object.
	 *
	 * @return  bool
	 */
	public final function validate ($method, \Overplace\Request $object)
	{
		$method = "getRequiredFor" . ucfirst($method);
		if (!method_exists($this, $method)){
			throw new \Overplace\Exception\Service("Validate method {$method} doesn't exists!");
		}
		$properties = array_keys($object->toArray());
		return empty(array_diff($this->{$method}(), $properties));
	}


}

?>