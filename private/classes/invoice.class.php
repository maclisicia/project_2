<?php
class Invoice extends databaseObject
{

  static protected $table_name = 'invoice';

  static protected $db_columns = ['invoiceid', 'manufacturer', 'referenceNum', 'amount'];

public $invoiceid;
public $manufacturer;
public $referenceNum;
public $amount;


// construct method
public function __construct($args=[]) {
  $this->invoiceid = $args['invoiceid'] ?? NULL;
  $this->manufacturer = $args['manufacturer'] ?? '';
  $this->referenceNum = $args['referenceNum'] ?? '';
  $this->amount = $args['amount'] ?? '';
}

// remember to return out a value since this is a function.
static public function find_by_username($userName, $password) {
	$sql = "SELECT * FROM " . static::$table_name;
	$sql .= " WHERE userName='" . self::$database->escape_string($userName) . "' AND password='" . self::$database->escape_string($password) . "'";
	$obj_array = static::find_by_sql($sql);
	if(!empty($obj_array)){
		return array_shift($obj_array);

	} else {
		return false;
	}
}

}

?>
