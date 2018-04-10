<?php
class Inventory extends databaseObject
{

  static protected $table_name = 'inventory';

  static protected $db_columns = ['inventoryid', 'inventoryAmt'];

public $inventoryid;
public $inventoryAmt;



// construct method
public function __construct($args=[]) {
  $this->inventoryid = $args['inventoryid'] ?? NULL;
  $this->inventoryAmt = $args['inventoryAmt'] ?? '';
}


// add your function here that

static public function find_contract($id){
	$sql = "SELECT * FROM contract";
	$sql .= " WHERE blogid='" . $id . "'";
	return static::find_by_sql($sql);
}

}

?>
