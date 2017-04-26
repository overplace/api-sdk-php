<?php

namespace Overplace\Exception;

/**
 * Class Sdk.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Service
 * @namespace   Overplace
 * @package     Overplace
 * @uses        \Exception
 *
 * Date:        19/04/2017
 */
class Service extends \Exception
{

	/**
	 * Service constructor.
	 * @access  public
	 * @param   string          $message    Exception message.  [Optional]
	 * @param   int             $code       Exception code.     [Optional]
	 * @param   \Exception|null $previous   Previous Exception. [Optional]
	 */
	public function __construct ($message = "", $code = 0, \Exception $previous = null)
	{
		parent::__construct($message, $code, $previous);
	}

}

?>