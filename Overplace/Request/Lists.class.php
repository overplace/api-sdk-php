<?php

namespace Overplace\Request;

/**
 * Class Lists.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Lists
 * @namespace   Overplace\Request
 * @package     Overplace
 * @see         \Overplace\Request
 *
 * Date:        27/04/2017
 */
class Lists extends \Overplace\Request
{

	/**
	 * Operator code of >
	 * @var     int
	 */
	const GREATER_THAN = 1;

	/**
	 * Operator code of <
	 * @var     int
	 */
	const LESS_THAN = 2;

	/**
	 * Operator code of =
	 * @var     int
	 */
	const EQUAL_TO = 3;

	/**
	 * Operator code of !=
	 * @var     int
	 */
	const NOT_EQUAL_TO = 4;

	/**
	 * Operator code of >=
	 * @var     int
	 */
	const GREATER_THAN_OR_EQUAL_TO = 31;

	/**
	 * Operator code of <=
	 * @var     int
	 */
	const LESS_THAN_OR_EQUAL_TO = 32;

	/**
	 * Order type Asc.
	 * @var     int
	 */
	const ORDER_ASC = 5;

	/**
	 * Order type Desc.
	 * @var     int
	 */
	const ORDER_DESC = 6;

	/**
	 * Array of sort.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addSortBy()
	 * @var     array
	 */
	protected $s;

	/**
	 * Array of group.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addGroupBy()
	 * @var     array
	 */
	protected $g;

	/**
	 * Array of and filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addFilterAnd()
	 * @var     array
	 */
	protected $a;

	/**
	 * Array of or filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addFilterOr()
	 * @var     array
	 */
	protected $o;

	/**
	 * Array of in filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addFilterIn()
	 * @var     array
	 */
	protected $i;

	/**
	 * Array of not in filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addFilterNotIn()
	 * @var     array
	 */
	protected $ni;

	/**
	 * Array of between filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request\Lists::addFilterBetween()
	 * @var     array
	 */
	protected $b;

	/**
	 * Number of page.
	 * Default: 1
	 * @access  public
	 * @var     int
	 */
	public $page;

	/**
	 * Number of rows to get in single call.
	 * Max number 50.
	 * Default: 6
	 * @access  public
	 * @var     int
	 */
	public $limit;

	/**
	 * Lists constructor.
	 * @access  public
	 * @see     \Overplace\Request::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->s = array();
		$this->g = array();
		$this->a = array();
		$this->o = array();
		$this->i = array();
		$this->ni = array();
		$this->b = array();
	}

	/**
	 * Offset setter.
	 * @access  public
	 * @param   int     $page
	 *
	 * @return  mixed
	 */
	public function setPage ($page)
	{
		$this->page = $page;

		return $this;
	}

	/**
	 * Limit setter.
	 * @access  public
	 * @param   int     $limit
	 *
	 * @return  mixed
	 */
	public function setLimit ($limit)
	{
		$this->limit = $limit;

		return $this;
	}

	/**
	 * Define sort.
	 * @access  public
	 * @param   int     $sort  Sort code.
	 * @param   int     $order Sort type. Default \Overplace\Request::ORDER_ASC. [Optional]
	 *
	 * @return  mixed
	 */
	public function addSortBy ($sort, $order = self::ORDER_ASC)
	{
		if (is_int($sort) && is_int($order) && ($order === self::ORDER_ASC || $order === self::ORDER_DESC)){
			$this->s[$sort] = $order;
		}

		return $this;
	}

	/**
	 * Define group.
	 * @access  public
	 * @param   int     $group  Group code.
	 *
	 * @return  mixed
	 */
	public function addGroupBy ($group)
	{
		if (is_int($group)){
			$this->g[] = $group;
		}

		return $this;
	}

	/**
	 * Add filter and.
	 * @access  public
	 * @param   int         $filtername     Code of filter.
	 * @param   int         $operator       Code of operator.
	 * @param   int|string  $value          Value.
	 *
	 * @return  mixed
	 */
	public function addFilterAnd ($filtername, $operator, $value)
	{
		if (is_int($filtername) && $this->isValidOperator($operator) && is_scalar($value) && !empty($value)){
			$this->a[$filtername] = array($value, $operator);
		}

		return $this;
	}

	/**
	 * Add filter or.
	 * @access  public
	 * @param   int         $filtername     Code of filter
	 * @param   int         $operator       Code of operator.
	 * @param   int|string  $value          Value.
	 *
	 * @return  mixed
	 */
	public function addFilterOr ($filtername, $operator, $value)
	{
		if (is_int($filtername) && $this->isValidOperator($operator) && is_scalar($value) && !empty($value)){
			$this->o[$filtername] = array($value, $operator);
		}

		return $this;
	}

	/**
	 * Add filter in.
	 * @access  public
	 * @param   int                 $filtername     Code of filter.
	 * @param   int|string|array    $value          Value.
	 *
	 * @return  mixed
	 */
	public function addFilterIn ($filtername, $value)
	{
		if (is_int($filtername) && (is_scalar($value) || is_array($value)) && !empty($value)){
			$this->i[$filtername] = $value;
		}

		return $this;
	}

	/**
	 * Add filter not in.
	 * @access  public
	 * @param   int                 $filtername     Code of filter.
	 * @param   int|string|array    $value          Value.
	 *
	 * @return  mixed
	 */
	public function addFilterNotIn ($filtername, $value)
	{
		if (is_int($filtername) && (is_scalar($value) || is_array($value)) && !empty($value)){
			$this->ni[$filtername] = $value;
		}

		return $this;
	}

	/**
	 * Add filter between.
	 * @access  public
	 * @param   int         $filtername     Code of filter.
	 * @param   int|string  $start          Start value.
	 * @param   int|string  $end            End value.
	 *
	 * @return  mixed
	 */
	public function addFilterBetween ($filtername, $start, $end)
	{
		if (is_int($filtername) && is_scalar($start) && is_scalar($end) && !empty($start) && !empty($end)){
			$this->b[$filtername] = array($start, $end);
		}

		return $this;
	}

	/**
	 * Verify if $operator is valid.
	 * Return true if is valid, false otherwise.
	 * @access  private
	 * @param   int     $operator       Operator.
	 *
	 * @return  bool
	 */
	private function isValidOperator ($operator)
	{
		switch ($operator){
			case self::GREATER_THAN:
			case self::LESS_THAN:
			case self::EQUAL_TO:
			case self::GREATER_THAN_OR_EQUAL_TO:
			case self::LESS_THAN_OR_EQUAL_TO:
				return true;
			break;
			default:
				return false;
			break;
		}
	}

}

?>