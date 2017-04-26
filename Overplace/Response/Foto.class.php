<?php

namespace Overplace\Response;

/**
 * Class Foto.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Foto
 * @namespace   Overplace\Response
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Foto extends \Overplace\Response
{

	/**
	 * Foto Id.
	 * @access  public
	 * @var     int
	 */
	public $id;

	/**
	 * Tipologia Foto.
	 * @access  public
	 * @var     \Overplace\Response\Tipologia
	 */
	public $tipologia;

	/**
	 * Foto status.
	 * @access  public
	 * @var     \Overplace\Response\Tipologia
	 */
	public $stato;

	/**
	 * Foto title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Foto alt.
	 * @access  public
	 * @var     string
	 */
	public $alt;

	/**
	 * Foto url.
	 * @access  public
	 * @var     string
	 */
	public $url;

	/**
	 * Foto constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct([
			'tipologia' => \Overplace\Response\Tipologia::class,
			'stato' => \Overplace\Response\Tipologia::class
		]);
	}

}

?>