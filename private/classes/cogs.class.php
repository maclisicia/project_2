<?php
class Cogs extends databaseObject
{

  static protected $table_name = 'cogs';

  static protected $db_columns = ['cogsid', 'date', 'cogsAmount'];

public $cogsid;
public $date;
public $cogsAmount;


// construct method
public function __construct($args=[]) {
  $this->cogsid = $args['cogsid'] ?? NULL;
  $this->date = $args['date'] ?? '';
  $this->cogsAmount = $args['cogsAmount'] ?? '';

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
