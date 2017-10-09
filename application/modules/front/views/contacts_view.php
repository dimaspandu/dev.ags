<?= $setting; ?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo titlePage('contacts'); ?></title>
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
				<span>Contact Us</span>
			</li>
		</ul>
	</div>
</div>

<div class="cont maincont">

	<h1><span>Contact Us</span></h1>
	<span class="maincont-line1 maincont-line12"></span>
	<span class="maincont-line2 maincont-line22"></span>

	<!-- Contacts - start -->
	<div class="pagecont contacts">
		<ul class="contacts-col1">
			<li>
				<p><b>Information</b></p>
				<p><?php echo $cq->information; ?></p>
			</li>
			<li>
				<p><b>Address</b></p>
				<p><?php echo $cq->address; ?></p>
			</li>
			<li>
				<p><b>Email</b></p>
				<p><a href="mailto:<?php echo $cq->email; ?>"><?php echo $cq->email; ?></a></p>
			</li>
		</ul>
		<ul class="contacts-col2">
			<li>
				<p><b>Phone</b></p>
				<p><?php echo $cq->phone; ?></p>
			</li>
			<li>
				<p><b>Business Hours</b></p>
				<?php echo $cq->business_hours; ?>
			</li>
		</ul>
		<div class="contacts-form">
			<h3>Send us a message</h3>
			<form action="#" class="form-validate">
				<input data-required="text" type="text" placeholder="Name" name="name4">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email4">
				<input data-required="text" type="text" placeholder="Phone number" name="phone4">
				<input type="submit" value="Send">
			</form>
		</div>
	</div>
	<!-- Contacts - end -->

</div>

<!-- Map -->
<div class="contacts-map" id="contacts-map"></div>

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
<script src="<?php echo base_url().'assets/equip/'; ?>js/main.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH9CBV75oIj5MlPsVLCBsbJW-x1nCfVz4&callback=initialize"></script>
<script>
"use strict";
function initialize() {
	var mapOptions = {
		zoom: 15,
		scrollwheel: false,
		center: new google.maps.LatLng(<?php echo $cq->lat_x; ?>, <?php echo $cq->lat_y; ?>)
	};
	var map = new google.maps.Map(document.getElementById('contacts-map'),
		mapOptions);
	var marker = new google.maps.Marker({
		position: map.getCenter(),
		icon: '<?php echo base_url().'assets/equip/'; ?>img/marker.png',
		map: map
	});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> 


</body>
</html>