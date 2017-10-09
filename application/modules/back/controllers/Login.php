<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Login extends MX_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('main_models');
        if($this->session->has_userdata('userlogin')){
            redirect(base_url().'admin/cms');
        }
    }
    
    public function loadLogin(){
        $data['vessel'] = $this->load->view('login_view', null, true);
        echo Modules::run('template/loadTemplateView', $data);
    }

    public function background(){
        if(isset($_POST['login'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $check = $this->main_models->sql("SELECT username, password FROM admin WHERE username='".$username."' && password='".md5($password)."'")->num_rows();
            if($check == 0 OR (empty($username) OR empty($password))){
                redirect(base_url().'admin?feedback=0&message=Invalid username or password!');
            }
            else{
                $this->session->set_userdata('userlogin', $username);
                redirect(base_url().'admin/cms');
            }
        }
        else{
            redirect(base_url().'admin');
        }
    }
}