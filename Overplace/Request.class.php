<?php

namespace Overplace;

/**
 * Class Request.
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Request
 * @namespace   Overplace
 * @package     Overplace
 *
 * Date:        20/04/2017
 */
class Request
{

	const GREATER_THAN = 1;

	const LESS_THAN = 2;

	const EQUAL_TO = 3;

	const NOT_EQUAL_TO = 4;

	const GREATER_THAN_OR_EQUAL_TO = 31;

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

	private static $conditionsAnd = 20;

	private static $conditionsOr = 21;

	private static $conditionsIn = 22;

	private static $conditionsNotIn = 23;

	private static $conditionsBetween = 24;

	/**
	 * Sort name.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request::addSortBy()
	 * @var     string
	 */
	protected $s;

	/**
	 * Array of and filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request::addFilterAnd()
	 * @var     array
	 */
	protected $a;

	/**
	 * Array of or filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request::addFilterOr()
	 * @var     array
	 */
	protected $o;

	/**
	 * Array of in filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request::addFilterIn()
	 * @var     array
	 */
	protected $i;

	/**
	 * Array of not in filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request::addFilterNotIn()
	 * @var     array
	 */
	protected $ni;

	/**
	 * Array of between filters.
	 * Defined in extended constant class.
	 * @access  protected
	 * @see     \Overplace\Request::addFilterBetween()
	 * @var     array
	 */
	protected $b;

	/**
	 * Request constructor.
	 * @access  public
	 */
	public function __construct ()
	{
		$this->s = array();
		$this->a = array();
		$this->o = array();
		$this->i = array();
		$this->ni = array();
		$this->b = array();
	}

	/**
	 * Define sort.
	 * @access  public
	 * @param   int     $sort  Sort name.
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

	public function addFilterAnd ($filtername, $operator, $value)
	{
		if (is_int($filtername) && $this->isValidOperator($operator) && is_scalar($value) && !empty($value)){
			$this->a[$filtername] = array($value, $operator);
		}

		return $this;
	}

	public function addFilterOr ($filtername, $operator, $value)
	{
		if (is_int($filtername) && $this->isValidOperator($operator) && is_scalar($value) && !empty($value)){
			$this->o[$filtername] = array($value, $operator);
		}

		return $this;
	}

	public function addFilterIn ($filtername, $value)
	{
		if (is_int($filtername) && (is_scalar($value) || is_array($value)) && !empty($value)){
			$this->i[$filtername] = $value;
		}

		return $this;
	}

	public function addFilterNotIn ($filtername, $value)
	{
		if (is_int($filtername) && (is_scalar($value) || is_array($value)) && !empty($value)){
			$this->ni[$filtername] = $value;
		}

		return $this;
	}

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

	/**
	 * Return array with only properties that have a value.
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		return array_filter(get_object_vars($this));
	}

}

?>