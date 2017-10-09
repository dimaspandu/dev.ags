<?= $setting; ?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo titlePage('catalog'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300italic,300&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/zabuto_calendar.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/flexslider.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/jquery.fancybox.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/ion.rangeSlider.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/ion.rangeSlider.skinFlat.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/style.css">
<link rel="stylesheet" href="<?php echo base_url().'assets/equip/'; ?>css/media.css">


<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

</head>
<body>



<!-- Header - start -->
<?= $header; ?>
<!-- Header - end -->

<!-- Main Content - start -->
<main>

<!-- Breadcrumbs -->
<div class="b-crumbs-wrap">
	<div class="cont b-crumbs">
		<ul>
			<li>
				<a href="<?php echo base_url(); ?>">Home</a>
			</li>
			<li>
				<span>Catalog</span>
			</li>
		</ul>
	</div>
</div>

<div class="cont maincont">

<h1><span>CATALOG</span></h1>
<p class="section-count">4535 ITEMS</p>
<span class="maincont-line1 maincont-line12"></span>
<span class="maincont-line2 maincont-line22"></span>

<!-- Catalog Sections -->
<ul class="cont-sections">
	<li class="active">
		<a href="#">All</a>
	</li>
	<li>
		<a href="#">Category 1</a>
	</li>
	<li>
		<a href="#">Category 2</a>
	</li>
	<li>
		<a href="#">Category 3</a>
	</li>
	<li>
		<a href="#">Category 4</a>
	</li>
	<li>
		<a href="#">Category 5</a>
	</li>
</ul>

<!-- Catalog Filter - start -->
<div class="section-top">
	<a href="#" class="section-menu-btn" id="section-menu-btn">Sub Category</a>
	<div class="section-sort">
		<p>Sort</p>
		<div class="dropdown-wrap">
			<p class="dropdown-title section-sort-ttl">Price: highest first</p>
			<ul class="dropdown-list">
				<li class="active">
					<a href="#">Price: highest first</a>
				</li>
				<li>
					<a href="#">Price: lowest first</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section-menu-wrap" id="section-menu-wrap">
		<div class="section-menu">
			<p class="section-menu-ttl">Category 1</p>
			<ul class="section-menu-list">
			    <?php
			    for($r = 1; $r<=8; $r++){
			    	echo '<li><a href="#">Item '.$r.'</a></li>';
			    }
			    ?>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Category 2</p>
			<ul class="section-menu-list">
			    <?php
			    for($r = 1; $r<=7; $r++){
			    	echo '<li><a href="#">Item '.$r.'</a></li>';
			    }
			    ?>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Category 3</p>
			<ul class="section-menu-list">
			    <?php
			    for($r = 1; $r<=7; $r++){
			    	echo '<li><a href="#">Item '.$r.'</a></li>';
			    }
			    ?>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Category 4</p>
			<ul class="section-menu-list">
			    <?php
			    for($r = 1; $r<=4; $r++){
			    	echo '<li><a href="#">Item '.$r.'</a></li>';
			    }
			    ?>
			</ul>
		</div>
		<div class="section-menu">
			<p class="section-menu-ttl">Category 5</p>
			<ul class="section-menu-list">
			    <?php
			    for($r = 1; $r<=4; $r++){
			    	echo '<li><a href="#">Item '.$r.'</a></li>';
			    }
			    ?>
			</ul>
		</div>
	</div>
</div>
<!-- Catalog Filter - end -->

<!-- Catalog Items - start -->
<div class="section-gallery">
    <?php
	for($r = 0; $r<8; $r++){
	?>
	<div class="sectgl">
		<a href="<?php echo base_url().'catalog/product'; ?>" class="sectgl-link">
			<p class="sectgl-img">
				<img src="<?php echo base_url().'assets/equip/'; ?>asset/162.png" alt="">
			</p>
			<h3><span>Suspendisse lobortis</span></h3>
		</a>
		<p class="sectgl-info">
			<a href="#" class="sectgl-categ">Helmets</a>
			<span class="sectgl-price">$290</span>
			<a href="#" class="sectgl-add">+ Add to cart</a>
		</p>
	</div>
	<?php
	}
	?>
</div>
<!-- Catalog Items - end -->

<!-- Pagination -->
<ul class="pager">
	<li>
		<a href="#">1</a>
	</li>
	<li class="dots">
		<a href="#">...</a>
	</li>
	<li>
		<a href="#">1</a>
	</li>
	<li class="active">
		<a href="#">2</a>
	</li>
	<li>
		<a href="#">3</a>
	</li>
	<li>
		<a href="#">4</a>
	</li>
	<li>
		<a href="#">5</a>
	</li>
	<li class="dots">
		<a href="#">...</a>
	</li>
	<li>
		<a href="#">12</a>
	</li>
</ul>

</div>

<!-- Get a Special Deals -->
<div class="getspec-wrap">
	<div class="cont getspec">
		<div class="getspec-cont">
			<h3>Treasure coming</h3>
			<p>New item</p>
			<form action="#">
				<input type="text" placeholder="Email address">
				<input type="submit" value="Get a special deals">
			</form>
		</div>
		<a href="#" class="getspec-img">
			<img src="asset/special-item.png" alt="">
		</a>
	</div>
</div>

</main>
<!-- Main Content - end -->


<!-- Footer - start -->
<?= $footer; ?>
<!-- Footer - end -->


<!-- Modal Form -->
<div id="modal-form" class="modal-form">
	<p class="modal-form-ttl">Contact Us</p>
	<form action="#" class="form-validate">
		<input data-required="text" type="text" placeholder="Name" name="name2">
		<input data-required="text" type="text" placeholder="Phone" name="phone2">
		<input data-required="text" data-required-email="email" type="text" placeholder="Email" name="email2">
		<textarea placeholder="Your message" name="mess2"></textarea>
		<input type="submit" value="Send">
	</form>
</div>

<script src="<?php echo base_url().'assets/equip/'; ?>js/jquery-1.12.3.min.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/fancybox/fancybox.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/masonry.pkgd.min.js"></script>

<script src="<?php echo base_url().'assets/equip/'; ?>js/ion.rangeSlider.min.js"></script>

<script src="<?php echo base_url().'assets/equip/'; ?>js/main.js"></script>

<script>
"use strict";
$(document).ready(function () {
	var $range_cost = $("#range_cost");
	$range_cost.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 0,
	    max: 20000,
	    from: 100,
	    to: 10000,
	    prefix: "$",
	});
	$range_cost.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
	});
});
</script>

</body>
</html>