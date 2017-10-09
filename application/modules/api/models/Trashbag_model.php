<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Trashbag_model extends CI_model{
    public function __construct(){
	parent:: __construct();
    }
    
    //GET TRASHBAG
    public function getTrashbag(){
	$trashbag = '[
	    {
	        "headline":"Plastic Bootles See Car Runk",
	        "category_name":"Plastic",
	        "item_name":"Plastic Bootles",
	        "picker":"8",
	        "picked":"0815455790 : \"Gan, ane posisi di bogor, ane bayar 5 kali lipat, jangan dilepas ke orang lain yak :D\"",
	        "status_tracking":"87%",
		"remaining_time":"3 Hours To Go"
	    },
	    {
	        "headline":"Boeng Koes Peer Man",
	        "category_name":"Plastic",
	        "item_name":"Candy Packaging",
	        "picker":"3",
	        "picked":"-",
	        "status_tracking":"53%",
	        "remaining_time":"9 Hours To Go"
	    },
	    {
	        "headline":"Rel Sepur 10 Kilogram",
	        "category_name":"Metal",
	        "item_name":"Mixed",
	        "picker":"0",
	        "picked":"-",
	        "status_tracking":"25%",
	        "remaining_time":"1 More Days"
	    },
	    {
	        "headline":"Card Does Indomie",
	        "category_name":"Paper",
	        "item_name":"Cardboard",
	        "picker":"17",
	        "picked":"085843439009 : \"Need sangat for pindahan kostan, ane bisa jemput dalam 1 jam, lokasi kwitang, thankyou :)\"",
	        "status_tracking":"87%",
		"remaining_time":"3 More Days"
	    }
	]';
	
	return json_encode($trashbag);
    }
}

