<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set("Asia/Jakarta");

class Access{
    public $ci;

    public function __construct(){
	$this->ci = &get_instance();
    }
    
    /* IS SIGN IN?
     * This function library to get if any session or not
     * with boolean return(true or false)
     * The userdata still use dummy data for sample
     */
    public function is_signin(){
	return ($this->ci->session->has_userdata('fullname')) ? true : false ;
    }
    
    /* GET USER
     * This function library to get each/every/all data user
     * where have a session or already signin
     * Just set here and call anywhere to get data user with
     * parameter return you want get it
     * This function call user_model from Models in application/models/User_model
     */
    public function get_user($return){
	$session_key = $this->ci->session->userdata('fullname');
	$this->ci->load->model('user_model');
	return ($this->ci->access->is_signin()) ? $this->ci->user_model->loadUserData($session_key, $return) : false;
    }
}

