<?php

namespace Overplace\Response\Statistiche;

/**
 * Class GoogleMyBusiness.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        GoogleMyBusiness
 * @namespace   Overplace\Response\Statistiche
 * @package     Overplace
 * @see         \Overplace\Response
 *
 * Date:        08/05/2017
 */
class GoogleMyBusiness extends \Overplace\Response
{

	/**
	 * GoogleMyBusiness Statistiche. Total number queries.
	 * @access  protected
	 * @var     int
	 */
	protected $queries;

	/**
	 * GoogleMyBusiness Statistiche. Number queries direct.
	 * @access  protected
	 * @var     int
	 */
	protected $queriesDirect;

	/**
	 * GoogleMyBusiness Statistiche. Number queries indirect.
	 * @access  protected
	 * @var     int
	 */
	protected $queriesIndirect;

	/**
	 * GoogleMyBusiness Statistiche. Total number views.
	 * @access  protected
	 * @var     int
	 */
	protected $views;

	/**
	 * GoogleMyBusiness Statistiche. Number views search.
	 * @access  protected
	 * @var     int
	 */
	protected $viewsSearch;

	/**
	 * GoogleMyBusiness Statistiche. Number views maps.
	 * @access  protected
	 * @var     int
	 */
	protected $viewsMaps;

	/**
	 * GoogleMyBusiness Statistiche. Total number actions.
	 * @access  protected
	 * @var     int
	 */
	protected $actions;

	/**
	 * GoogleMyBusiness Statistiche. Number actions website.
	 * @access  protected
	 * @var     int
	 */
	protected $actionsWebsite;

	/**
	 * GoogleMyBusiness Statistiche. Number actions phone.
	 * @access  protected
	 * @var     int
	 */
	protected $actionsPhone;

	/**
	 * GoogleMyBusiness Statistiche. Number actions driving directions.
	 * @access  protected
	 * @var     int
	 */
	protected $actionsDrivingDirections;

	/**
	 * GoogleMyBusiness Statistiche. Start date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataInizio;

	/**
	 * GoogleMyBusiness Statistiche. End date of stats.
	 * @access  protected
	 * @var     string
	 */
	protected $dataFine;

	/**
	 * GoogleMyBusiness constructor.
	 * @access  public
	 * @see     \Overplace\Response::__construct()
	 * @param   array   $properties Array with property name => values to assign. Default is empty array. [Optional]
	 */
	public function __construct (array $properties = array())
	{
		parent::__construct($properties, array(

		));
	}

	/**
	 * Queries getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getQueries ()
	{
		return $this->queries;
	}

	/**
	 * QueriesDirect getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getQueriesDirect ()
	{
		return $this->queriesDirect;
	}

	/**
	 * QueriesIndirect getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getQueriesIndirect ()
	{
		return $this->queriesIndirect;
	}

	/**
	 * Views getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getViews ()
	{
		return $this->views;
	}

	/**
	 * ViewsSearch getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getViewsSearch ()
	{
		return $this->viewsSearch;
	}

	/**
	 * ViewsMaps getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getViewsMaps ()
	{
		return $this->viewsMaps;
	}

	/**
	 * Actions getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getActions ()
	{
		return $this->actions;
	}

	/**
	 * ActionsWebsite getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getActionsWebsite ()
	{
		return $this->actionsWebsite;
	}

	/**
	 * ActionsPhone getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getActionsPhone ()
	{
		return $this->actionsPhone;
	}

	/**
	 * ActionsDrivingDirections getter.
	 * @access  public
	 *
	 * @return  int
	 */
	public function getActionsDrivingDirections ()
	{
		return $this->actionsDrivingDirections;
	}

	/**
	 * DataInizio getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataInizio ()
	{
		return $this->dataInizio;
	}

	/**
	 * DataFine getter.
	 * @access  public
	 *
	 * @return  string
	 */
	public function getDataFine ()
	{
		return $this->dataFine;
	}

}

?>