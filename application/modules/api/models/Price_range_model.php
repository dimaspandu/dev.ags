<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Price_range_model extends CI_model{
    public function __construct(){
	parent:: __construct();
    }
    
    //GET PRICE RANGE
    public function getPriceRange($item_ID, $weight){
	if(empty($weight)){
	    $price_range = '{ "price_range":"0" }';
	}
	else{
	    $price_range = $weight * (int) $item_ID * 1000;
	    $price_range = '{ "price_range":"'.$price_range.'" }';
	}
	
	return json_encode($price_range);
    }
}

