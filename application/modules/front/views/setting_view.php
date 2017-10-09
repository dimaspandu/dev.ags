<?php
function titlePage($page){
	if($page == 'home'){
		return 'Artha Guna Saputra';
	}
	elseif($page == 'catalog'){
		return 'Catalog - AGS';
	}
	elseif($page == 'product'){
		return 'Product Name - AGS';
	}
	elseif($page == 'about'){
		return 'About Us - AGS';
	}
	elseif($page == 'contacts'){
		return 'Contact Us - AGS';
	}
}
?>