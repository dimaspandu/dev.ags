<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Trashline extends MX_Controller{
    public function __construct(){
	parent:: __construct();
    }
    
    //HTTP LOAD TRASHLINE
    public function httpLoadTrashline(){
	$this->load->model('trashline_model');
	$trashline = $this->trashline_model->getTrashline();
	    
	echo json_decode($trashline);
    }
}