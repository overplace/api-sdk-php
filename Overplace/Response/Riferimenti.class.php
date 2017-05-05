<?php

namespace Overplace\Response;

/**
 * Class Riferimenti
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Riferimenti
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        20/04/2017
 */
class Riferimenti extends \Overplace\Response
{

	/**
	 * Phone number.
	 * @access  protected
	 * @var     string
	 */
	protected $telefono;

	/**
	 * Mobilephone number.
	 * @access  protected
	 * @var     string
	 */
	protected $cellulare;

	/**
	 * Link Overplace contact page.
	 * @access  protected
	 * @var     string
	 */
	protected $email;

	/**
	 * Fax number
	 * @access  protected
	 * @var     string
	 */
	protected $fax;

	/**
	 * Links of website and social page.
	 * @access  protected
	 * @var     array
	 * @example array("website" => "http://www.example.com", "facebook" => "https://www.facebook.com/" ...)
	 */
	protected $links;

	/**
	 * Riferimenti constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties);
	}

	/**
	 * Telefono getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getTelefono ()
	{
		return $this->telefono;
	}

	/**
	 * Cellulare getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCellulare ()
	{
		return $this->cellulare;
	}

	/**
	 * Email getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getEmail ()
	{
		return $this->email;
	}

	/**
	 * Fax getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getFax ()
	{
		return $this->fax;
	}

	/**
	 * Links getter.
	 * @access  public
	 *
	 * @return  array
	 */
	public function getLinks ()
	{
		return $this->links;
	}

}

?>