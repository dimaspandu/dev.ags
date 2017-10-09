<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Template extends MX_Controller{
    public function __construct(){
        parent:: __construct();
    }
    
    public function loadTemplateView($data){
        $this->load->view('template_view', $data);
    }
}
