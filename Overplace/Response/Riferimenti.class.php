<?php

namespace Overplace\Response;

/**
 * Class Riferimenti
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Riferimenti
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Riferimenti extends \Overplace\Response
{

	/**
	 * Phone number.
	 * @access  public
	 * @var     string
	 */
	public $telefono;

	/**
	 * Mobilephone number.
	 * @access  public
	 * @var     string
	 */
	public $cellulare;

	/**
	 * Link Overplace contact page.
	 * @access  public
	 * @var     string
	 */
	public $email;

	/**
	 * Fax number
	 * @access  public
	 * @var     string
	 */
	public $fax;

	/**
	 * Links of website and social page.
	 * @access  public
	 * @var     array
	 * @example array("website" => "http://www.example.com", "facebook" => "https://www.facebook.com/" ...)
	 */
	public $links;

	/**
	 * Riferimenti constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

}

?>