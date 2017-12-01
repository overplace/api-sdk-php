<?php

namespace Overplace;

/**
 * Class Response.
 *
 * Classe principale che gestisce le risposte dal server.
 *
 * @author      Andrea Bellucci <andrea.bellucci@overplace.it>
 * @name        Response
 * @namespace   Overplace
 * @package     Overplace
 * @uses        \ReflectionClass
 */
class Response
{

	/**
	 * Mappatura delle proprietà.
	 *
	 * Array contente una mappatura delle relazioni tra le proprietà
	 * della classe con le classi Response.
	 *
	 * @access  protected
	 * @var     array
	 */
	protected $_map;

	/**
	 * Response message.
	 *
	 * Messaggio di status ricevuto dal server.
	 *
	 * @access  protected
	 * @see     \Overplace\Response::getMessage()
	 * @var     string
	 */
	protected $_message;

	/**
	 * Response constructor.
	 *
	 * Costruttore della classe Response.
	 *
	 * @access  public
	 * @param   array   $properties  Array contenente le proprietà e il valore da assignare alla classe.
	 *                               La struttura dell'array deve avere la forma 'property' => 'value'.
	 *                               Di default è un array vuoto. [Optional]
	 * @param   array   $map         Array contenente la mappatura delle proprietà della classe.
	 *                               Di default è un array vuoto. [Optional]
	 * @param   string  $message     Messaggio di status ricevuto dal server.
	 *                               Il messaggio viene utilizzato solamente quando la risposta del server non
	 *                               contiene proprietà della classe. [Optional]
	 */
	public function __construct (array $properties = array(), array $map = array(), $message = '')
	{
		$this->_map = $map;
		$this->_message = $message;
		if (!empty($properties)){
			$this->assign($properties);
		}
	}

	/**
	 * Convert object to array.
	 *
	 * Converte la classe in array e lo ritorna. Esclude le proprietà _map e _message.
	 * Anche le proprietà con un valore nullo vengono ritornate.
	 *
	 * @access  public
	 *
	 * @return  array
	 */
	public function toArray ()
	{
		$properties = get_object_vars($this);
		unset($properties['_map'], $properties['_message']);

		$keys = array_keys($properties);
		$len = count($keys);
		for ($i = 0; $i < $len; $i++){
			if ($properties[$keys[$i]] instanceof \Overplace\Response || $properties[$keys[$i]] instanceof \Overplace\Collection){
				$properties[$keys[$i]] = $properties[$keys[$i]]->toArray();
			}
		}

		return $properties;
	}

	/**
	 * Message getter.
	 *
	 * Ritorna il messaggio ricevuto dal server.
	 *
	 * @access  public
	 *
	 * @return  string
	 */
	public function getMessage ()
	{
		return $this->_message;
	}

	/**
	 * Assegna le proprietà della classe da un array.
	 *
	 * Assegna tutte le chiavi dell'array che corrispondono al nome di una proprietà.
	 * Se il valore da assegnare è un array e la proprietà è presente nella mappatura della classe, converte il valore
	 * nella classe associata e assegna le proprietà. Inoltre se il valore è un array enumerativo di altri array allora
	 * crea una collection di classi.
	 *
	 * @access  protected
	 * @param   array   $properties     Array con le proprietà e i valori da assegnare alla classe.
	 */
	protected function assign (array $properties)
	{
		foreach ($properties as $key => $value){
			$property = $this->toCamelCase($key);
			if (property_exists($this, $property)){
				if (is_array($value) && array_key_exists($property, $this->_map)){
					$class = new \ReflectionClass($this->_map[$property]);
					if (isset(array_keys($value)[0]) && is_int(array_keys($value)[0])){
						$collection = array();
						$len = count($value);
						for ($i = 0; $i < $len; $i++){
							$collection[] = $class->newInstance($value[$i]);
						}
						$this->{$property} = new \Overplace\Collection($collection);
					}else {
						$this->{$property} = $class->newInstance($value);
					}
				}else {
					$this->{$property} = $value;
				}
			}
		}
	}

	/**
	 * snake_case to camelCase.
	 *
	 * Converte una stringa dal formato snake_case al formato camelCase.
	 *
	 * @access  private
	 * @param   string  $string     Stringa da convertire.
	 *
	 * @return  string
	 */
	private function toCamelCase ($string)
	{
		if (!is_string($string) || empty($string)){
			return "";
		}

		return lcfirst(str_replace(" ", "", ucwords(str_replace("_", " ", $string))));
	}

}

?>