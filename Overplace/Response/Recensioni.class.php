<?php

namespace Overplace\Response;

/**
 * Class Recensioni.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Recensioni
 * @namespace   Overplace\Response
 * @package     Overplace
 * @uses        \Overplace\Response
 *
 * Date:        03/05/2017
 */
class Recensioni extends \Overplace\Response
{

	/**
	 * Recensioni id.
	 * @access  protected
	 * @var     int
	 */
	protected $id;

	/**
	 * Recensioni status.
	 * @access  protected
	 * @var     \Overplace\Response\Tipologia
	 */
	protected $stato;

	/**
	 * Recensioni author.
	 * @access  protected
	 * @var     \Overplace\Response\Utente
	 */
	protected $autore;

	/**
	 * Recensioni vote.
	 * Min value: 1
	 * Max value: 5
	 * @access  protected
	 * @var     int
	 */
	protected $voto;

	/**
	 * Recensioni body text.
	 * @access  protected
	 * @var     string
	 */
	protected $commento;

	/**
	 * Recensioni date.
	 * @access  protected
	 * @var     string
	 */
	protected $data;

	/**
	 * Recensioni answer.
	 * @access  protected
	 * @var     \Overplace\Collection
	 */
	protected $risposte;

	/**
	 * Commento constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(
			'stato' => \Overplace\Response\Tipologia::class,
			'autore' => \Overplace\Response\Utente::class,
			'risposte' => \Overplace\Response\Recensioni::class
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
	 * Autore getter.
	 * @access  public
	 *
	 * @return  \Overplace\Response\Utente
	 */
	public function getAutore ()
	{
		return $this->autore;
	}

	/**
	 * Voto getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getVoto ()
	{
		return $this->voto;
	}

	/**
	 * Commento getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getCommento ()
	{
		return $this->commento;
	}

	/**
	 * Data getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getData ()
	{
		return $this->data;
	}

	/**
	 * Risposte getter.
	 * @access  public
	 *
	 * @return  \Overplace\Collection
	 */
	public function getRisposte ()
	{
		return $this->risposte;
	}

}

?>