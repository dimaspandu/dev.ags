<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Home extends MX_Controller{
    public function __construct(){
        parent:: __construct();
    }
    
    public function loadHome(){
        $data['setting'] = $this->load->view('setting_view', null, true);
        $dataHeader['checkin'] = 'index';
        $data['header'] = $this->load->view('header_view', $dataHeader, true);
        $data['footer'] = $this->load->view('footer_view', null, true);
        $data['vessel'] = $this->load->view('home_view', $data, true);
        echo Modules::run('template/loadTemplateView', $data);
    }
}