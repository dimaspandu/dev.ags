<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Contacts extends MX_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('main_models');
    }
    
    public function loadContacts(){
        $data['cq'] = $this->main_models->sql("SELECT * FROM contact_us")->row_object();
        $data['setting'] = $this->load->view('setting_view', null, true);
        $dataHeader['checkin'] = 'contacts';
        $data['header'] = $this->load->view('header_view', $dataHeader, true);
        $data['footer'] = $this->load->view('footer_view', null, true);
        $data['vessel'] = $this->load->view('contacts_view', $data, true);
        echo Modules::run('template/loadTemplateView', $data);
    }
}