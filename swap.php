<?php
	define('ABS_PATH', dirname(__FILE__));
	define('MOD_PATH', ABS_PATH . '/modules');

	require_once MOD_PATH . '/utils/functions.php';
	require_once MOD_PATH . '/template/favicon.php';
	require_once MOD_PATH . '/template/loader.php';

	$template_loader = new template( ABS_PATH . '/templates' );
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Item swapper  &mdash; Daamwala </title>
	<link rel="stylesheet" href="./assets/css/normalize.min.css?v=5.0.0" media="all">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css?v=4.0.0-aplha.6" media="all">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css?v=4.7.5" media="all">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css?v=2.3.4" media="all">
	<link rel="stylesheet" href="./assets/css/owl.theme.default.min.css?v=2.3.4" media="all">
	<link rel="stylesheet" href="./assets/compiled/global.min.css?ver=<?php date('dmY'); ?>" media="all">
	<link rel="stylesheet" href="./assets/compiled/swap.min.css?ver=<?php date('dmY'); ?>" media="all">
<?php get_favicon(); ?>
	<script src="./assets/js/jquery.min.js?v=3.1.1" type="text/javascript"></script>
	<script lang="JavaScript" type="text/javascript"> !function(n){var o=window.location.href;-1!=o.indexOf(".php")&&(o=o.replace(".php",""),window.location=o)}(); </script>
</head>
<body>
<?php $template_loader->load('header', 'php'); ?>
	<main>
		<div class="row no-gutters">
			<div class="col-12 col-xl-9 swaps-wrapper">
				<!-- .swap-wrapper -->
				<div class="row no-gutters swap-wrapper">
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/aashirvaad-atta-whole-wheat-1.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Aashirvaad : Atta - Whole Wheat </span>
							<span class="price"> Rs 42.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 84.00 </span>
							<span class="saving-price text-right"> (you save 6.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase groffers"> Groffers </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link lato">
							<i class="fa fa-trash-o" aria-hidden="true"></i> Remove
						</a>
					</div>
					<!-- /.swap-card -->
					<div class="col-12 col-xl-2 indicator-wrapper"></div>
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/atta-noodles-ummy-masala-1.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Gurunanak : Atta - Whole Wheat </span>
							<span class="price bright"> Rs 35.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 70.00 </span>
							<span class="saving-price text-right"> (you save 16.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase bigbasket"> Bigbasket </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link text-uppercase">
							6 more for swap, view all
						</a>
					</div>
					<!-- /.swap-card -->
				</div>
				<!-- /.swap-wrapper -->
				<!-- .swap-wrapper -->
				<div class="row no-gutters swap-wrapper">
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/fortune-rice-bran-health-1.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Fortune Rice Bran Health </span>
							<span class="price"> Rs 42.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 84.00 </span>
							<span class="saving-price text-right"> (you save 6.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase bigbasket"> Bigbasket </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link lato">
							<i class="fa fa-trash-o" aria-hidden="true"></i> Remove
						</a>
					</div>
					<!-- /.swap-card -->
					<div class="col-12 col-xl-2 indicator-wrapper no-bg"></div>
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card swaped">
						<span class="icon-wrapper">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</span>
						<span class="text-wrapper lato">
							Swapped and saved <span class="price"> Rs. 5.00 </span>
						</span>
					</div>
					<!-- /.swap-card -->
				</div>
				<!-- /.swap-wrapper -->
				<!-- .swap-wrapper -->
				<div class="row no-gutters swap-wrapper">
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/aashirvaad-atta-whole-wheat-4.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Aashirvaad : Atta - Whole Wheat </span>
							<span class="price"> Rs 42.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 84.00 </span>
							<span class="saving-price text-right"> (you save 6.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase groffers"> Groffers </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link lato">
							<i class="fa fa-trash-o" aria-hidden="true"></i> Remove
						</a>
					</div>
					<!-- /.swap-card -->
					<div class="col-12 col-xl-2 indicator-wrapper"></div>
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/gurunanak-atta-whole-wheat-1.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Gurunanak : Atta - Whole Wheat </span>
							<span class="price bright"> Rs 35.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 70.00 </span>
							<span class="saving-price text-right"> (you save 16.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase bigbasket"> Bigbasket </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link text-uppercase">
							6 more for swap, view all
						</a>
					</div>
					<!-- /.swap-card -->
				</div>
				<!-- /.swap-wrapper -->
				<!-- .swap-wrapper -->
				<div class="row no-gutters swap-wrapper">
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card alone">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/aashirvaad-atta-whole-wheat-5.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Aashirvaad : Atta - Whole Wheat </span>
							<span class="price"> Rs 42.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 84.00 </span>
							<span class="saving-price text-right"> (you save 6.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase spencers"> Spencers </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link lato">
							<i class="fa fa-trash-o" aria-hidden="true"></i> Remove
						</a>
					</div>
					<!-- /.swap-card -->
				</div>
				<!-- /.swap-wrapper -->
				<!-- .swap-wrapper -->
				<div class="row no-gutters swap-wrapper">
					<!-- .swap-card -->
					<div class="col-12 col-xl-5 row no-gutters swap-card alone">
						<div class="col-4 image-wrapper">
							<img src="./assets/img/products/fortune-rice-bran-health-2.png" alt="Image not available">
						</div>
						<div class="col-8 details-wrapper">
							<span class="product-name text-uppercase"> Fortune Rice Bran Health </span>
							<span class="price"> Rs 42.00 <span class="quantity"> 1kg </span> </span>
							<span class="total-price text-right"> Rs 84.00 </span>
							<span class="saving-price text-right"> (you save 6.00 Rs) </span>
							<div class="row no-gutters action-wrapper">
								<div class="col-7 delivery-wrapper">
									<span class="store text-uppercase bigbasket"> Bigbasket </span>
									<span class="delivery-truck"></span>
									<small class="lato"> Tomorrow </small>
								</div>
								<div class="col-5 buttons-wrapper">
									<select class="quantity"></select>
								</div>
							</div>
						</div>
						<a href="#" class="remove-link lato">
							<i class="fa fa-trash-o" aria-hidden="true"></i> Remove
						</a>
					</div>
					<!-- /.swap-card -->
				</div>
				<!-- /.swap-wrapper -->
			</div>
			<div class="col-12 col-xl-3 sidebar-wrapper">
				<div class="row no-gutters">
					<div class="col-8 text-uppercase"> Items (12) </div>
					<div class="col-4"> 1000 Rs </div>
				</div>
				<div class="row no-gutters">
					<div class="col-8 text-uppercase"> Stores (3) </div>
				</div>
				<div class="row no-gutters scaled mt-4">
					<div class="col-8 text-uppercase color-primary"> Save on items </div>
					<div class="col-4 color-primary"> 200 Rs </div>
				</div>
				<div class="row no-gutters scaled hoverable cheveroned">
					<div class="col-8 text-uppercase color-primary"> Swap 3 Items &amp; Save </div>
					<div class="col-4 color-primary"> 58 Rs </div>
				</div>
			</div>
			<div class="col-12 footer-wrapper d-flex">
				<img src="./assets/img/icons/delivery-text-icon.png" alt="">
				<button> Split and Save </button>
			</div>
		</div>
	</main>
<?php $template_loader->load('footer', 'php'); ?>
</body>
</html>