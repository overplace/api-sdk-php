<?php

namespace Overplace\Response\Foto;

/**
 * Class Url.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Url
 * @namespace   Overplace\Response\Foto
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        07/06/2017
 */
class Url extends \Overplace\Response
{

	/**
	 * Url extra small image.
	 * @access  protected
	 * @var     string
	 */
	protected $xs;

	/**
	 * Url small image.
	 * @access  protected
	 * @var     string
	 */
	protected $sm;

	/**
	 * Url medium image.
	 * @access  protected
	 * @var     string
	 */
	protected $md;

	/**
	 * Url large image.
	 * @access  protected
	 * @var     string
	 */
	protected $lg;

	/**
	 * Url extra large image.
	 * @access  protected
	 * @var     string
	 */
	protected $xl;

	/**
	 * Url jumbotron image.
	 * @access  protected
	 * @var     string
	 */
	protected $jumbo;

	/**
	 * Url original image.
	 * @access  protected
	 * @var     string
	 */
	protected $original;

	/**
	 * Url constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties);
	}

	/**
	 * Xs getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getXs ()
	{
		return $this->xs;
	}

	/**
	 * Sm getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getSm ()
	{
		return $this->sm;
	}

	/**
	 * Md getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getMd ()
	{
		return $this->md;
	}

	/**
	 * Lg getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getLg ()
	{
		return $this->lg;
	}

	/**
	 * Xl getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getXl ()
	{
		return $this->xl;
	}

	/**
	 * Jumbo getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getJumbo ()
	{
		return $this->jumbo;
	}

	/**
	 * Original getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getOriginal ()
	{
		return $this->original;
	}

}

?>