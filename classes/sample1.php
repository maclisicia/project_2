<?php
class Blog extends databaseObject
{

  static protected $table_name = 'blog';

  static protected $db_columns = ['blogid', 'blogName', 'url', 'email', 'contactFName', 'contactLName', 'qualityScore', 'mozDA', 'sponsors', 'fqshop', 'gfairy', 'mstar'];

public $blogid;
public $blogName;
public $url;
public $email;
public $contactFName;
public $contactLName;
public $qualityScore;
public $mozDA;
public $sponsors;
public $fqshop;
public $gfairy;
public $mstar;



// construct method
public function __construct($args=[]) {
  $this->blogid = $args['blogid'] ?? NULL;
  $this->blogName = $args['blogName'] ?? '';
  $this->url = $args['url'] ?? '';
  $this->email = $args['email'] ?? '';
  $this->contactFName = $args['contactFName'] ?? '';
  $this->contactLName = $args['contactLName'] ?? '';
  $this->qualityScore = $args['qualityScore'] ?? '';
  $this->mozDa = $args['mozDa'] ?? '';
  $this->sponsors = $args['sponsors'] ?? '';
  $this->fqshop = $args['fqshop'] ?? '';
  $this->gfairy = $args['gfairy'] ?? '';
  $this->mstar = $args['mstar'] ?? '';
}


// add your function here

static public function qualScore($mozDa, $sponsors, $fqshop, $gfairy, $mstar){
	if($fqshop == 1){$fq = 10;}else{$fq = 0;}
	if($gfairy == 1){$gf = 10;}else{$gf = 0;}
	if($mstar == 1){$ms = 10;}else{$ms = 0;}

	$qualScore = $fg + $gf + $mozDA + $sponsors;

	return $qualScore;
}



}

?>
