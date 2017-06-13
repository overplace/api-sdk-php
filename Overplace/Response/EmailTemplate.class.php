<?php

namespace Overplace\Response;

/**
 * Class EmailTemplate.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        EmailTemplate
 * @namespace   Overplace\Response
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        12/06/2017
 */
class EmailTemplate extends \Overplace\Response
{

	/**
	 * Id email template.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Email template status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Email template type.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $tipologia;

	/**
	 * Email template name.
	 * @access  protected
	 * @var     string
	 */
	protected $nome;

	/**
	 * EmailTemplate constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties     Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'tipologia' => \Overplace\Response\Tipologia::class
		));
	}

	/**
	 * Id getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getId ()
	{
		return $this->id;
	}

	/**
	 * Stato getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getStato ()
	{
		return $this->stato;
	}

	/**
	 * Tipologia getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Tipologia
	 */
	public function getTipologia ()
	{
		return $this->tipologia;
	}

	/**
	 * Nome getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getNome ()
	{
		return $this->nome;
	}

}

?>