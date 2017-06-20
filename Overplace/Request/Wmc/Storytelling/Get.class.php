<?php

namespace Overplace\Request\Wmc\Storytelling;

/**
 * Class Get.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Get
 * @namespace   Overplace\Request\Wmc\Storytelling
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        08/06/2017
 */
class Get extends \Overplace\Request
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
	 * Get constructor.
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
	 * @param   mixed   $idWmc
	 *
	 * @return  \Overplace\Request\Wmc\Storytelling\Get
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
	 * @return  \Overplace\Request\Wmc\Storytelling\Get
	 */
	public function setIdStory ($idStory)
	{
		$this->idStory = $idStory;

		return $this;
	}

}

?>