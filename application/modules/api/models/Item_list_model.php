<?php
defined('BASEPATH') OR exit('ERROR');
date_default_timezone_set('Asia/Jakarta');

class Item_list_model extends CI_model{
    public function __construct(){
	parent:: __construct();
    }
    
    //GET ITEM LIST
    public function getItemList(){
	$item_list = '[
	    {
	        "item_ID":"1",
	        "category_name":"Plastic",
	        "item_name":"Plastic"
	    },
	    {
	        "item_ID":"2",
	        "category_name":"Plastic",
	        "item_name":"-Plastic Bootles"
	    },
	    {
	        "item_ID":"3",
	        "category_name":"Plastic",
	        "item_name":"-Plastic Glass"
	    },
	    {
	        "item_ID":"4",
	        "category_name":"Plastic",
	        "item_name":"-Candy Packaging"
	    },
	    {
	        "item_ID":"5",
	        "category_name":"Fabric",
	        "item_name":"Fabric"
	    },
	    {
	        "item_ID":"6",
	        "category_name":"Glass",
	        "item_name":"Glass"
	    },
	    {
	        "item_ID":"7",
	        "category_name":"Rubber",
	        "item_name":"Rubber"
	    },
	    {
	        "item_ID":"8",
	        "category_name":"Paper",
	        "item_name":"Paper"
	    },
	    {
	        "item_ID":"9",
	        "category_name":"Paper",
	        "item_name":"-HVS"
	    },
	    {
	        "item_ID":"10",
	        "category_name":"Paper",
	        "item_name":"-Cardboard"
	    },
	    {
	        "item_ID":"11",
	        "category_name":"Paper",
	        "item_name":"-Newspaper"
	    },
	    {
	        "item_ID":"12",
	        "category_name":"Metal",
	        "item_name":"Metal"
	    }
	    ]';
	
	return json_encode($item_list);
    }
}

