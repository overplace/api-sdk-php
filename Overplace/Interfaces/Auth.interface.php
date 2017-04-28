<?php

namespace Overplace\Interfaces;

/**
 * Interface Auth.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Auth
 * @namespace   Overplace\Interfaces
 * @package     Overplace
 *
 * Date:        19/04/2017
 */
interface Auth
{

	/**
	 * Auth constructor.
	 * @access  public
	 * @param   \Overplace\App   $app
	 */
	public function __construct (\Overplace\App $app);

	/**
	 * Generate hash for authentication request.
	 * Return hash string.
	 * @access  public
	 * @throws  \Overplace\Exception\Auth
	 * @param   string  $method     Method request.
	 * @param   string  $body       Request Body. [Optional]
	 *
	 * @return  string
	 */
	public function hash ($method, $body = '');

	/**
	 * Return string to add Http Header Request.
	 * @access  public
	 * @throws  \Overplace\Exception\Auth
	 * @param   string  $hash   Hash make by hash method.
	 *
	 * @return  string
	 */
	public function getHttpHeader ($hash);

}

?>