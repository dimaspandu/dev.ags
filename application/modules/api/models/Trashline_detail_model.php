<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Trashline_detail_model extends CI_model{
    public function __construct(){
	parent:: __construct();
    }
    
    //GET TRASHLINE DETAIL
    public function getTrashlineDetail($trashline_ID){
	$phone = substr('087784313513', 0, -4).'XXXX';
	$trashline_detail = '{
		"trashline_ID":"'.$trashline_ID.'",
		"category_name":"paper", 
		"item_name":"cardboard", 
		"headline":"I have 3 sacks of Cardboard", 
		"description":"I have a sack, I have a cardboard.. oh.. Cardboard sack. if you wanna this, please take away from me.", 
		"by":"Cardusman",
		"weight":"21",
		"price_range":"96000",
		"address":"Kembang Sepatu Street No 49 Senen, Jakarta Centre",
		"address_detail":"",
		"phone":"'.$phone.'"
	    }';
	
	return json_encode($trashline_detail);
    }
}

