<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Trashline_model extends CI_model{
    public function __construct(){
	parent:: __construct();
    }
    
    //GET TRASHLINE
    public function getTrashline(){
	$trashline = '[
	    {
		"trashline_ID":"1",
		"category_name":"paper", 
		"item_name":"cardboard", 
		"headline":"I have 3 sacks of Cardboard", 
		"description":"'.$this->sub_desc('I have a sack, I have a cardboard.. oh.. Cardboard sack. if you wanna this, please take away from me.', 80).'", 
		"by":"Cardusman",
		"created_at":"'.$this->time_ago('2017-04-16 11:52:23').'"
	    },
	    {
		"trashline_ID":"2",
		"category_name":"plastic", 
		"item_name":"bootle", 
		"headline":"Aqua 4 Kilogram", 
		"description":"'.$this->sub_desc('Hey guys, hurry... pick my bootle.', 80).'", 
		"by":"Bootleman",
		"created_at":"'.$this->time_ago('2017-04-15 22:25:18').'"
	    },
	    {
		"trashline_ID":"3",
		"category_name":"glass", 
		"item_name":"mixed", 
		"headline":"Wanna glass?", 
		"description":"'.$this->sub_desc('Hey guys, hurry... pick my glass.', 80).'", 
		"by":"Cinderella",
		"created_at":"'.$this->time_ago('2017-04-15 22:28:53').'"
	    },
	    {
		"trashline_ID":"4",
		"category_name":"metal", 
		"item_name":"mixed", 
		"headline":"My metal is Heavy", 
		"description":"'.$this->sub_desc('Hey guys, hurry... pick my metal.', 80).'", 
		"by":"Metalman",
		"created_at":"'.$this->time_ago('2017-04-15 22:30:09').'"
	    },
	    {
		"trashline_ID":"5",
		"category_name":"fabric", 
		"item_name":"mixed", 
		"headline":"Fabric ex T-shirt", 
		"description":"'.$this->sub_desc('Hey guys, hurry... pick my fabric.', 80).'", 
		"by":"Omom",
		"created_at":"'.$this->time_ago('2017-04-15 22:33:53').'"
	    }
	]';
	
	return json_encode($trashline);
    }
    
    //SUB DESC
    public function sub_desc($desc, $length){
	if(strlen($desc) > $length){
	    $length = substr($desc, 0, $length);
	    $desc = $length;
	    
	    return $desc.' ...';
	}
	else{
	    return $desc;
	}
    }
    
    //TIME AGO
    public function time_ago($timestamp){
	$diff = time() - strtotime($timestamp);
	$seconds = $diff;
	$minutes = round($diff/60);
	$hours = round($diff/3600);
	$days = round($diff/86400);
	$weeks = round($diff/604800);
	$months = round($diff/2419200);
	$years = round($diff/29030400);
	
	if($seconds <= 60){
	    $time = $seconds.' Seconds Ago';
	}
	elseif($minutes <= 60){
	    $time = $minutes.' Minutes Ago';
	}
	elseif($hours <= 24){
	    $time = $hours.' Hours Ago';
	}
	elseif($days <= 7){
	    $time = $days.' Days Ago';
	}
	elseif($weeks <= 4){
	    $time = $weeks.' Weeks Ago';
	}
	elseif($months <= 12){
	    $time = $months.' Months Ago';
	}
	else{
	    $time = $years.' Years Ago';
	}
	
	return $time;
    }
}

