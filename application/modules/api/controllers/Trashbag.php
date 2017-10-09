<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Trashbag extends MX_Controller{
    public function __construct(){
	parent:: __construct();
    }
    
    //HTTP LOAD TRASHBAG
    public function httpLoadTrashbag(){
	$this->load->model('trashbag_model');
	$trashbag = $this->trashbag_model->getTrashbag();
	    
	echo json_decode($trashbag);
    }
}