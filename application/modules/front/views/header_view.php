<div class="header">

	<!-- Navmenu Mobile Toggle Button -->
	<a href="#" class="header-menutoggle" id="header-menutoggle">Menu</a>

	<!-- Logotype -->
	<p class="header-logo">
		<a href="index.html"><img class="img-top-logo" src="<?php echo base_url().'assets/equip/'; ?>asset/ags-logo.png" alt=""></a>
	</p>

	<!-- Navmenu - start -->
	<nav id="top-menu">
		<ul>
		    <?php
		    $nav_page = array(
		    	'index',
		    	'about',
		    	'catalog',
		    	'contacts',
		    	'#'
		    	);
		    $nav_label = array(
		    	'HOME',
		    	'ABOUT US',
		    	'CATALOG',
		    	'CONTACT US',
		    	'<img src="'.base_url().'assets/equip/img/search-dark.png" alt="">'
		    	);
		    for($r = 0; $r<count($nav_label); $r++){
		    	echo '<li'; if($nav_page[$r] == $checkin){ echo ' class="active"'; } echo '><a href="'.base_url().''.home($nav_page[$r]).'">'.$nav_label[$r].'</a></li>';
		    }

		    function home($nav_page){
		    	if($nav_page == 'index'){
		    		return '';
		    	}
		    	else{
		    		return $nav_page;
		    	}
		    }
		    ?>
		</ul>
	</nav>
	<!-- Navmenu - end -->

</div>