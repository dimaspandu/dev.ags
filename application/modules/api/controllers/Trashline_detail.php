<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Trashline_detail extends MX_Controller{
    public function __construct(){
	parent:: __construct();
    }
    
    //HTTP LOAD TRASHLINE DETAIL
    public function httpLoadTrashlineDetail(){
	if($this->input->get('post')){
	    $trashline_ID = $this->input->get('post');
	    $this->load->model('trashline_detail_model');
	    $trashline_detail = $this->trashline_detail_model->getTrashlineDetail($trashline_ID);
	    
	    echo json_decode($trashline_detail);
	}
	else{
	    redirect(base_url().'translate_uri_dashes');
	}
    }
}