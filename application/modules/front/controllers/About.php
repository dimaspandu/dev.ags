<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class About extends MX_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('main_models');
    }
    
    public function loadAbout(){
        $data['amq'] = $this->main_models->sql("SELECT * FROM about_us_main");
        $data['setting'] = $this->load->view('setting_view', null, true);
        $dataHeader['checkin'] = 'about';
        $data['header'] = $this->load->view('header_view', $dataHeader, true);
        $data['footer'] = $this->load->view('footer_view', null, true);
        $data['vessel'] = $this->load->view('about_view', $data, true);
        echo Modules::run('template/loadTemplateView', $data);
    }
}