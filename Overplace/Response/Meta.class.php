<?php

namespace Overplace\Response;

/**
 * Class Meta.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Meta
 * @namespace   Overplace\Response
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Meta extends \Overplace\Response
{

	/**
	 * Meta title.
	 * @access  public
	 * @var     string
	 */
	public $titolo;

	/**
	 * Meta description.
	 * @access  public
	 * @var     string
	 */
	public $descrizione;

	/**
	 * Meta keywords.
	 * @access  public
	 * @var     string
	 */
	public $keywords;

	/**
	 * Meta constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		parent::__construct();
	}

}

?>