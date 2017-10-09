<?= $setting; ?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo titlePage('about'); ?></title>
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
				<span>About Us</span>
			</li>
		</ul>
	</div>
</div>

<div class="cont maincont">
	<h1><span>About us</span></h1>
	<span class="maincont-line1 maincont-line12"></span>
	<span class="maincont-line2 maincont-line22"></span>

	<!-- Slider About us - start -->
	<div class="flexslider pagecont aboutus" id="aboutus">
		<ul class="slides">
		    <?php
		    foreach($amq->result() as $r){
		    ?>
		    <li class="aboutus-slide">
				<p class="aboutus-img">
					<img src="<?php echo $r->aum_image; ?>" alt="">
				</p>
				<div class="aboutus-cont">
					<h3><?php echo $r->title; ?></h3>
					<p><?php echo $r->paragraph; ?></p>
				</div>
			</li>
		    <?php
		    }
		    ?>
		</ul>
	</div>
	<!-- Slider About us - end -->

</div>


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
<script src="<?php echo base_url().'assets/equip/'; ?>js/jquery.fractionslider.min.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/fancybox/fancybox.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/jquery.flexslider-min.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url().'assets/equip/'; ?>js/main.js"></script>

</body>
</html>