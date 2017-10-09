<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Item_list extends MX_Controller{
    public function __construct(){
	parent:: __construct();
    }
    
    //HTTP LOAD ITEM LIST
    public function httpLoadItemList(){
	$this->load->model('item_list_model');
	$item_list = $this->item_list_model->getItemList();
	    
	echo json_decode($item_list);
    }
}