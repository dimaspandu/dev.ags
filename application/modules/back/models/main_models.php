<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class main_models extends CI_Model{
    public function __construct(){
        parent:: __construct();
    }
    
    public function sql($command){
        return $this->db->query($command);
    }
}