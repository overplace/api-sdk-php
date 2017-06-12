<?php

namespace Overplace\Request\Storytelling;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Storytelling
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        08/06/2017
 */
class Get extends \Overplace\Request
{

	/**
	 * Id scheda
	 * @access  public
	 * @var     int
	 */
	public $idScheda;

	/**
	 * Id story.
	 * @access  public
	 * @var     int
	 */
	public $idStory;

	/**
	 * Get constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * IdScheda setter.
	 * @access  public
	 * @param   mixed   $idScheda
	 *
	 * @return  \Overplace\Request\Storytelling\Get
	 */
	public function setIdScheda ($idScheda)
	{
		$this->idScheda = $idScheda;

		return $this;
	}

	/**
	 * IdStory setter.
	 * @access  public
	 * @param   int     $idStory
	 *
	 * @return  \Overplace\Request\Storytelling\Get
	 */
	public function setIdStory ($idStory)
	{
		$this->idStory = $idStory;

		return $this;
	}

}

?>