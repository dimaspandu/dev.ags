<?= $setting; ?>
<!doctype html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title><?php echo titlePage('product'); ?></title>
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
				<a href="catalog.php">Catalog</a>
			</li>
			<li>
				<a href="catalog.php">Category Name</a>
			</li>
			<li>
				<span>Product Name</span>
			</li>
		</ul>
	</div>
</div>

<div class="cont maincont">

	<h1><span>Product Name</span></h1>
	<span class="maincont-line1"></span>
	<span class="maincont-line2"></span>

	<!-- Product - start -->
	<div class="prod">

		<!-- Product Slider - start -->
		<div class="prod-slider-wrap">
			<div class="flexslider prod-slider" id="prod-slider">
				<ul class="slides">
					<li>
						<!-- <a> & <img> Without Spaces -->
						<a data-fancybox-group="prod" class="fancy-img" href="img/logo.png"><img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-1.png" alt=""></a>
					</li>
					<li>
						<!-- <a> & <img> Without Spaces -->
						<a data-fancybox-group="prod" class="fancy-img" href="img/logo.png"><img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-2.png" alt=""></a>
					</li>
					<li>
						<!-- <a> & <img> Without Spaces -->
						<a data-fancybox-group="prod" class="fancy-img" href="img/logo.png"><img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-3.png" alt=""></a>
					</li>
					<li>
						<!-- <a> & <img> Without Spaces -->
						<a data-fancybox-group="prod" class="fancy-img" href="img/logo.png"><img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-4.png" alt=""></a>
					</li>
				</ul>
			</div>
			<div class="flexslider prod-thumbs" id="prod-thumbs">
				<ul class="slides">
					<li>
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-1.png" alt="">
					</li>
					<li>
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-2.png" alt="">
					</li>
					<li>
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-3.png" alt="">
					</li>
					<li>
						<img src="<?php echo base_url().'assets/equip/'; ?>asset/product/290-327-4.png" alt="">
					</li>
				</ul>
			</div>
		</div>
		<!-- Product Slider - end -->

		<!-- Product Content - start -->
		<div class="prod-cont">
			<div class="prod-desc">
				<p class="prod-desc-ttl"><span>Description</span></p>
				<p>Nulla eleifend venenatis aliquam. Nulla fringilla maximus velit vitae convallis. Duis enim tortor, dapibus vitae tristique vel, tristique at ligula.. <a id="prod-showdesc" href="#">read more</a></p>
			</div>
			<div class="prod-props">
				<dl>
					<dt>Lorem</dt>
					<dd>4 Lorem</dd>
					<dt>Ipsum</dt>
					<dd>62/6000 Ipsum</dd>
					<dt>Dolor</dt>
					<dd>2 Dolor</dd>
					<dt>Sit</dt>
					<dd>101N5000 (sit)</dd>
					<dt>Amet (ml)</dt>
					<dd>1000 Amet</dd>
					<dt><a id="prod-showprops" href="#">view all details</a></dt>
					<dd></dd>
				</dl>
			</div>
			<div class="prod-actions">
				<div class="prod-rating-wrap">
					<p class="prod-rating">
						<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
					</p>
					<p><span class="prod-rating-count">89</span> reviews</p>
				</div>

			</div>
		</div>
		<!-- Product Content - end -->

	</div>
	<!-- Product - end -->

	<!-- Product Tabs - start -->
	<div class="prod-tabs-wrap">
		<ul class="prod-tabs">
			<li data-prodtab-num="1" id="prod-desc" class="active">
				<a data-prodtab="#prod-tab-1" href="#">Description</a>
			</li>
			<li data-prodtab-num="2" id="prod-props">
				<a data-prodtab="#prod-tab-2" href="#">Features</a>
			</li>
			<li data-prodtab-num="3" id="prod-reviews">
				<a data-prodtab="#prod-tab-3" href="#">Reviews <span>36</span></a>
			</li>
			<li class="prod-tabs-addreview">Add a review</li>
		</ul>
		<div class="prod-tab-cont">
			<p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
			<div class="prod-tab prod-tab-desc" id="prod-tab-1">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, debitis, autem, aspernatur sapiente velit minus vitae tempora nemo optio possimus necessitatibus ex earum aperiam illum soluta obcaecati reprehenderit provident facere.</p>
				<p>Celit minus vitae tempora nemo optio possimus necessitatibus ex earum aperiam illum soluta obcaecati reprehenderit provident facere.</p>
				<p>Atque, neque, dolorum dolore est distinctio omnis architecto vel. Quis, ratione, neque, maiores quas facilis nam laborum fuga odio a deserunt error iure facere exercitationem dolorem numquam reprehenderit assumenda pariatur quidem deleniti ducimus porro labore quod veniam. Dolore, totam sunt architecto possimus consectetur consequuntur.</p>
			</div>
			<p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
			<div class="prod-tab" id="prod-tab-2">
				<dl class="prod-tab-props">
					<dt>Lorem</dt>
					<dd>4 Lorem</dd>
					<dt>Ipsum</dt>
					<dd>62/6000 Ipsum</dd>
					<dt>Dolor</dt>
					<dd>2 Dolor</dd>
					<dt>Sit</dt>
					<dd>101N5000 (sit)</dd>
					<dt>Amet (ml)</dt>
					<dd>1000 Amet</dd>
				</dl>
			</div>
			<p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Reviews</p>
			<div class="prod-tab prod-reviews" id="prod-tab-3">
				<form action="#" class="prod-addreview-form" id="prod-addreview-form">
					<p class="prod-tab-addreview">Add Your Review</p>
					<p class="prod-rating">
						<i class="fa fa-star-o" title="5"></i><i class="fa fa-star-o" title="4"></i><i class="fa fa-star-o" title="3"></i><i class="fa fa-star-o" title="2"></i><i class="fa fa-star-o" title="1"></i>
					</p>
					<input type="text" placeholder="Name">
					<input type="text" placeholder="E-mail">
					<textarea placeholder="Message"></textarea>
					<input type="submit" value="Add Review">
				</form>
				<?php
				for($r = 0; $r<4; $r++){
				?>
				<div class="prod-review">
					<h3>Guna Saputra</h3>
					<p class="prod-review-rating">
						<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
					</p>
					<p>Praesent libero dui, consequat nec placerat id, cursus at metus. <br>Donec semper velit eget ex ultrices, eu lacinia nunc scelerisque. <br>Ut tincidunt magna sit amet felis dictum efficitur.</p>
				</div>
				<?php
				}
				?>
				<p class="prod-review-more">
					<a href="#">show more</a>
				</p>
			</div>
			<p class="prod-tabs-addreview prod-tabs-addreview-mob">Add a review</p>
		</div>
	</div>
	<!-- Product Tabs - end -->

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
<script src="<?php echo base_url().'assets/equip/'; ?>js/main.js"></script>

</body>
</html>