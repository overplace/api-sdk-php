<?php

namespace Overplace\Exception;

/**
 * Class Auth.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Auth
 * @namespace   Overplace\Exception
 * @package     Overplace
 * @see         \Overplace\Exception\Sdk
 *
 * Date:        19/04/2017
 */
class Auth extends \Overplace\Exception\Sdk
{

	/**
	 * Auth constructor.
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