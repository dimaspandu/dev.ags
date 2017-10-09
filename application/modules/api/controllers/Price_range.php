<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Price_range extends MX_Controller{
    public function __construct(){
        parent:: __construct();
    }
    
    //HTTP LOAD PRICE RANGE
    public function httpLoadPriceRange(){
        if($this->input->get('post')){
	    $ex_post = explode('-', $this->input->get('post'));
	    $item_ID = $ex_post[0];
	    $weight = $ex_post[1];
	    $this->load->model('price_range_model');
	    $price_range = $this->price_range_model->getPriceRange($item_ID, $weight);
	    
	    echo json_decode($price_range);
        }
        else{
	    echo '{ "price_range":"0" }';
        }
    }
}