<?php

namespace Overplace\Request\Wmc\Storytelling;

/**
 * Class Delete.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Delete
 * @namespace   Overplace\Request\Wmc\Storytelling
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        12/06/2017
 */
class Delete extends \Overplace\Request
{

	/**
	 * IdWmc
	 * @access  public
	 * @var     int
	 */
	public $idWmc;

	/**
	 * Id story.
	 * @access  public
	 * @var     int
	 */
	public $idStory;

	/**
	 * Delete constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * IdWmc setter.
	 * @access  public
	 * @param   int     $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Delete
	 */
	public function setIdWmc ($idWmc)
	{
		$this->idWmc = $idWmc;

		return $this;
	}

	/**
	 * IdStory setter.
	 * @access  public
	 * @param   int     $idStory
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Delete
	 */
	public function setIdStory ($idStory)
	{
		$this->idStory = $idStory;

		return $this;
	}

}

?>