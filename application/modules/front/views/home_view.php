<?= $setting; ?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo titlePage('home'); ?></title>
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


<!-- Frontpage Slider -->
<div class="frontslider-wrap">
	<div class="responisve-container">
		<div class="slider" id="front-slider">
			<div class="slide">
				<img 	src="<?php echo base_url().'assets/equip/'; ?>asset/watts-valve.png"
						data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="Watts Valve">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">WATTS</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">VALVE</p>		
			</div>
			<div class="slide">
				<img 	src="<?php echo base_url().'assets/equip/'; ?>asset/saginomiya-instrument.png"
						data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Saginomiya Instrument">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">SAGINOMIYA</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">INSTRUMENT</p>	
			</div>
			<div class="slide">
				<img 	src="<?php echo base_url().'assets/equip/'; ?>asset/victaulic-valve.png"
						data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Victaulic Valve">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">VICTAULIC</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">VALVE</p>	
			</div>
		</div>
	</div>
</div>



<!-- Special Deals Items -->
<div class="specials-wrap">
	<div class="cont specials">
		<h2>Special Deals</h2>
		<p class="specials-count">350 ITEMS</p>
		<div class="specials-list">
			<div class="special special-pseudo">
				<a href="#" class="special-link"></a>
			</div>
			<div class="special special-first">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/385.png" alt="">
					</p>
					<h3><span>Nulla lacinia lectus</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Suspensions</a>
					<span class="special-price">$200</span>
					<del>$400</del>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/195-195.png" alt="">
					</p>
					<h3><span>Praesent amet mollis</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Brakes</a>
					<span class="special-price">$312</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/190-190.png" alt="">
					</p>
					<h3><span>Mauris suscipit tellus</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Gauges</a>
					<span class="special-price">$230.50</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/203.png" alt="">
					</p>
					<h3><span>Suspendisse lobortis</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Filters</a>
					<span class="special-price">$1290</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/162.png" alt="">
					</p>
					<h3><span>Nam iaculis risus nisi</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Sprockets</a>
					<span class="special-price">$1180</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/164.png" alt="">
					</p>
					<h3><span>Sed fermentum elit</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Spark Plugs</a>
					<span class="special-price">$305</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.php" class="special-link">
					<p class="special-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/300.png" alt="">
					</p>
					<h3><span>Mauris suscipit tellus</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">Springs</a>
					<span class="special-price">$230.30</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
		</div>
		<p class="special-more">
			<a href="#">show more</a>
		</p>
		<span class="special-line1"></span>
		<span class="special-line2"></span>
	</div>
</div>



<!-- Get a Special Deals -->
<div class="getspec-wrap">
	<div class="cont getspec">
		<div class="getspec-cont">
			<h3>Treasure coming</h3>
			<p>New special item</p>
			<form action="#" class="form-validate">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email3">
				<input type="submit" value="Get a special deals">
			</form>
		</div>
		<a href="#" class="getspec-img">
			<img src="<?php echo base_url().'assets/equip/'; ?>asset/special-item.png" alt="">
		</a>
	</div>
</div>



<!-- Popular Items -->
<div class="populars-wrap">
	<div class="cont populars">
		<h2>Popular</h2>
		<p class="populars-count">7 ITEMS</p>
		<div class="populars-list">
            <?php
	        for($r = 0; $r<8; $r++){
	        ?>
			<div class="popular">
				<a href="product.php" class="popular-link">
					<p class="popular-img">
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/190-190.png" alt="">
					</p>
					<h3><span>Suspendisse lobortis</span></h3>
				</a>
				<p class="popular-info">
					<a href="#" class="popular-categ">Helmets</a>
					<span class="popular-price">$290</span>
					<a href="#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<?php
		    }
			?>
		</div>
		<p class="popular-more">
			<a href="#">show more</a>
		</p>
		<span class="popular-line1"></span>
		<span class="popular-line2"></span>
	</div>
</div>



<!-- Frontpage Article -->
<div class="botarticle-wrap">
	<div class="cont botarticle">
		<div class="botarticle-cont">
			<h3>Kings of the item</h3>
			<p>Best item</p>
			<a href="#" class="botarticle-more">Read more</a>
		</div>
		<a href="blog.html" class="botarticle-img">
			<img src="<?php echo base_url().'assets/equip/'; ?>asset/special-item.png" alt="">
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

<script src="<?php echo base_url().'assets/equip/'; ?>js/jquery.fractionslider.min.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/ion.rangeSlider.min.js"></script>

<script src="<?php echo base_url().'assets/equip/'; ?>js/main.js"></script>

<script>
"use strict";
// Range Slider
$(document).ready(function () {
	var $range_cost = $("#range_cost");
	$range_cost.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 0,
	    max: 20000,
	    from: 200,
	    to: 14000,
	    prefix: "$",
	});
	$range_cost.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
	});
	var $range_year = $("#range_year");
	$range_year.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 1990,
	    max: 2016,
	    from: 2013,
	    to: 2016,
	});
	$range_year.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_year_ttl').html(value[0] + " - " + value[1]);
	});
});
</script>

</body>
</html>