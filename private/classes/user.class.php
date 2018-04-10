<?php
class User extends databaseObject
{

  static protected $table_name = 'user';

  static protected $db_columns = ['userid', 'password', 'userName'];

public $userid;
public $password;
public $userName;



// construct method
public function __construct($args=[]) {
  $this->userid = $args['userid'] ?? NULL;
  $this->password = $args['password'] ?? '';
  $this->userName = $args['userName'] ?? '';
}


// add your function here

/*static public function qualScore($mozDa, $sponsors, $fqshop, $gfairy, $mstar){
	if($fqshop == 1){$fq = 10;}else{$fq = 0;}
	if($gfairy == 1){$gf = 10;}else{$gf = 0;}
	if($mstar == 1){$ms = 10;}else{$ms = 0;}

	$qualScore = $fg + $gf + $mozDA + $sponsors;

	return $qualScore;
}*/



}

?>
