<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class User_model extends CI_Model{
    public function __construct(){
	parent:: __construct();
    }
    
    /* LOAD USER DATA
     * This is function to set All Data User
     * by Session Key and get which data needed
     * to be return for get_user($return) function
     * This is directly from database
     * Just set the query database here
     */
    public function loadUserData($session_key, $return){
	switch($return){
                case $return == 'fullname':
                    return $session_key;
                case $return == 'address':
                    return 'Kembang Sepatu Street No 49 Senen, Jakarta Centre';
                case $return == 'address_detail':
                    return '';
                case $return == 'phone':
                    return '087784313513';
            }
    }
}