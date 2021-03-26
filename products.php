<?php
	define('ABS_PATH', dirname(__FILE__));
	define('MOD_PATH', ABS_PATH . '/modules');

	require_once MOD_PATH . '/utils/functions.php';
	require_once MOD_PATH . '/template/favicon.php';
	require_once MOD_PATH . '/template/loader.php';
	require_once MOD_PATH . '/template/product-table.php';

	$template_loader = new template( ABS_PATH . '/templates' );
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Atta  &mdash; Daamwala </title>
	<link rel="stylesheet" href="./assets/css/normalize.min.css?v=5.0.0" media="all">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css?v=4.0.0-aplha.6" media="all">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css?v=4.7.5" media="all">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css?v=2.3.4" media="all">
	<link rel="stylesheet" href="./assets/css/owl.theme.default.min.css?v=2.3.4" media="all">
	<link rel="stylesheet" href="./assets/compiled/global.min.css?ver=<?php date('dmY'); ?>" media="all">
	<link rel="stylesheet" href="./assets/compiled/products.min.css?ver=<?php date('dmY'); ?>" media="all">
<?php get_favicon(); ?>
	<script src="./assets/js/jquery.min.js?v=3.1.1" type="text/javascript"></script>
	<script lang="JavaScript" type="text/javascript"> !function(n){var o=window.location.href;-1!=o.indexOf(".php")&&(o=o.replace(".php",""),window.location=o)}(); </script>
</head>
<body>
<?php $template_loader->load('header', 'php'); ?>
	<main>
		<div class="row no-gutters">
			<div class="col-12 col-lg-3 col-xl-3 list-wrapper">
				<h3 class="list-title"> Grocery &amp; Staples </h3>
				<ul class="menu-list">
					<li><a href="#"> Pulses </a></li>
					<li>
						<a href="#"> Atta &amp; Other Flours </a>
						<ul class="sub-menu">
							<li class="active"><a href="#"> Atta </a></li>
							<li><a href="#"> Besan & Sooji/Rava </a></li>
							<li><a href="#"> Other Flours </a></li>
						</ul>
					</li>
					<li><a href="#"> Rice &amp; Other Grains </a></li>
					<li><a href="#"> Dry Fruits &amp; Nuts </a></li>
					<li><a href="#"> Edible Oils </a></li>
					<li><a href="#"> Ghee &amp; Vanaspati </a></li>
					<li><a href="#"> Spices </a></li>
					<li><a href="#"> Salt &amp; Sugar </a></li>
				</ul>
			</div>
			<div class="col-12 col-lg-9 col-xl-9 content-wrapper">
				<div class="products-wrapper row no-gutters">
					<!-- .product-card -->
					<div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-3 product-card">
						<h3 class="item-name"> Aashirvaad : Atta - Whole wheat </h3>
						<div class="row no-gutters">
							<div class="col-6 item-image-wrapper">
								<img src="./assets/img/products/atta-noodles-ummy-masala-1.png" alt="Image not available">
							</div>
							<div class="col-6 item-details-wrapper">
								<span class="item-price"> &#8377; 42.00 1kg </span>
								<div class="stores-wrapper">
									<a href="/provider?store=bigbasket"> Bigbasket </a>
									<a href="/provider?store=delybazar"> Delybazar </a>
								</div>
								<div class="icons-wrapper">
									<span class="icon delivery-truck"></span>
									<span class="icon credit-card"></span>
									<span class="icon timer"></span>
								</div>
							</div>
							<div class="row no-gutters action-wrapper w-100">
								<div class="col-6 compare-wrapper">
									<span class="icon scale"></span>
									<button class="btn-compare"> Compare </button>
								</div>
								<div class="col-6 add-wrapper w-100">
									<!-- [option] child elements will be added dynamically. -->
									<select class="quantity"></select>
									<div class="dropdown-wrapper">
										<button class="btn-add"> Add </button>
										<div class="dropdown-list">
											<a href="#"> Bigbasket </a>
											<a href="#"> Delybazar </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.product-card -->
					<!-- .product-card -->
					<div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-3 product-card">
						<h3 class="item-name"> Patanjali tradational whole wheat chakki atta with bran </h3>
						<div class="row no-gutters">
							<div class="col-6 item-image-wrapper">
								<img src="./assets/img/products/patanjali-traditional-whole-wheat-chakki-atta-with-bran.png" alt="Image not available">
							</div>
							<div class="col-6 item-details-wrapper">
								<span class="item-price"> &#8377; 44.00 1kg </span>
								<div class="stores-wrapper">
									<a href="/provider?store=grofers"> Grofers </a>
								</div>
								<div class="icons-wrapper">
									<span class="icon delivery-truck"></span>
									<span class="icon credit-card"></span>
								</div>
							</div>
							<div class="row no-gutters action-wrapper w-100">
								<div class="col-6 compare-wrapper">
									<span class="icon scale"></span>
									<button class="btn-compare"> Compare </button>
								</div>
								<div class="col-6 add-wrapper w-100">
									<!-- [option] child elements will be added dynamically. -->
									<select class="quantity"></select>
									<div class="dropdown-wrapper">
										<button class="btn-add"> Add </button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.product-card -->
					<!-- .product-card -->
					<div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-3 product-card">
						<h3 class="item-name"> Fortune chakki fresh atta </h3>
						<div class="row no-gutters">
							<div class="col-6 item-image-wrapper">
								<img src="./assets/img/products/fortune-chakki-fresh-atta.png" alt="Image not available">
							</div>
							<div class="col-6 item-details-wrapper">
								<span class="item-price"> &#8377; 49.00 1kg </span>
								<div class="stores-wrapper">
									<a href="/provider?store=grofers"> Grofers </a>
									<a href="/provider?store=spencers"> Spencers </a>
								</div>
								<div class="icons-wrapper">
									<span class="icon delivery-truck"></span>
									<span class="icon credit-card"></span>
								</div>
							</div>
							<div class="row no-gutters action-wrapper w-100">
								<div class="col-6 compare-wrapper">
									<span class="icon scale"></span>
									<button class="btn-compare"> Compare </button>
								</div>
								<div class="col-6 add-wrapper w-100">
									<!-- [option] child elements will be added dynamically. -->
									<select class="quantity"></select>
									<div class="dropdown-wrapper">
										<button class="btn-add"> Add </button>
										<div class="dropdown-list">
											<a href="#"> Grofers </a>
											<a href="#"> Spencers </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.product-card -->
					<!-- .product-card -->
					<div class="col-12 col-sm-6 col-md-4 col-lg-6 col-xl-3 product-card sponsored">
						<h3 class="item-name"> Nutroactive keto atta (net carb 5%) extremely low carb flour </h3>
						<div class="row no-gutters">
							<div class="col-6 item-image-wrapper">
								<img src="./assets/img/products/nutroactive-keto-atta.png" alt="Image not available">
							</div>
							<div class="col-6 item-details-wrapper">
								<span class="item-price"> &#8377; 56.00 1kg </span>
								<div class="stores-wrapper">
									<a href="/provider?store=bigbasket"> Bigbasket </a>
									<a href="/provider?store=spencers"> Spencers </a>
								</div>
								<div class="icons-wrapper">
									<span class="icon delivery-truck"></span>
									<span class="icon credit-card"></span>
								</div>
							</div>
							<div class="row no-gutters action-wrapper w-100">
								<div class="col-6 compare-wrapper">
									<span class="icon scale"></span>
									<button class="btn-compare"> Compare </button>
								</div>
								<div class="col-6 add-wrapper w-100">
									<!-- [option] child elements will be added dynamically. -->
									<select class="quantity"></select>
									<div class="dropdown-wrapper">
										<button class="btn-add"> Add </button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.product-card -->
				</div>
<?php
	$data = array(
		'icons' => array('delivery-truck', 'credit-card'),
		'items' => array(
			array('Aashirvaad : Atta - Whole wheat', '42.00', '1kg'),
			array('Patanjali tradational whole wheat chakki atta with bran', '45.00', '1kg'),
			array('Fortune chakki fresh atta', '52.00', '1kg'),
			array('Nutroactive Keto atta (net carb 5%) extremely low carb flour', '56.00', '1kg'),
		)
	);
	products_table('Bigbasket', $data);
	
	$data = array(
		'icons' => array('delivery-truck', 'credit-card', 'timer'),
		'items' => array(
			array('Aashirvaad : Atta - Whole wheat', '42.00', '1kg'),
			array('Fortune chakki fresh atta', '48.00', '1kg'),
		)
	);
	products_table('Delybazar', $data);

	$data = array(
		'icons' => array('delivery-truck', 'credit-card'),
		'items' => array(
			array('Aashirvaad : Atta - Whole wheat', '43.00', '1kg'),
			array('Patanjali tradational whole wheat chakki atta with bran', '44.00', '1kg'),
			array('Fortune chakki fresh atta', '49.00', '1kg'),
			array('Nutroactive Keto atta (net carb 5%) extremely low carb flour', '57.00', '1kg'),
		)
	);
	products_table('Grofers', $data);

	$data = array(
		'icons' => array('delivery-truck', 'credit-card'),
		'items' => array(
			array('Aashirvaad : Atta - Whole wheat', '45.00', '1kg'),
			array('Patanjali tradational whole wheat chakki atta with bran', '44.00', '1kg'),
			array('Fortune chakki fresh atta', '49.00', '1kg'),
			array('Nutroactive Keto atta (net carb 5%) extremely low carb flour', '56.00', '1kg'),
		)
	);
	products_table('Speners', $data);
?>
			</div>
		</div>
	</main>
<?php $template_loader->load('footer', 'php'); ?>
</body>
</html>