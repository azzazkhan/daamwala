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
	<title> Daamwala &mdash; You Shop, We Save </title>
	<link rel="stylesheet" href="./assets/css/normalize.min.css?v=5.0.0" media="all">
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css?v=4.0.0-aplha.6" media="all">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css?v=4.7.5" media="all">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css?v=2.3.4" media="all">
	<link rel="stylesheet" href="./assets/css/owl.theme.default.min.css?v=2.3.4" media="all">
	<link rel="stylesheet" href="./assets/compiled/global.min.css?ver=<?php date('dmY'); ?>" media="all">
	<link rel="stylesheet" href="./assets/compiled/store.min.css?ver=<?php date('dmY'); ?>" media="all">
<?php get_favicon(); ?>
	<script src="./assets/js/jquery.min.js?v=3.1.1" type="text/javascript"></script>
	<script lang="JavaScript" type="text/javascript"> !function(n){var o=window.location.href;-1!=o.indexOf(".php")&&(o=o.replace(".php",""),window.location=o)}(); </script>
</head>
<body>
<?php $template_loader->load('header', 'php'); ?>
	<main>
		<div id="carouselExampleControls" class="carousel slide intro-carousel" data-ride="carousel" data-interval="5000">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item tiles-slide row no-gutters active">
					<div class="col-12 col-lg-4 tiles-wrapper row no-gutters">
						<div class="col-5 mb-2 tile bg-danger" style="position: relative; right: -5.5%;">
							<img src="./assets/img/icons/basket-icon.png" alt="">
						</div>
						<div class="col-2 mb-2"></div>
						<div class="col-5 mb-2 tile bg-primary" style="position: relative; left: -5.5%;">
							<img src="./assets/img/icons/basket-icon.png" alt="">
						</div>
						<div class="col-5 mt-2 tile bg-warning" style="position: relative; right: -5.5%;">
							<img src="./assets/img/icons/basket-icon.png" alt="">
						</div>
						<div class="col-2 mt-2"></div>
						<div class="col-5 mt-2 tile bg-success" style="position: relative; left: -5.5%;">
							<img src="./assets/img/icons/basket-icon.png" alt="">
						</div>
					</div>
					<div class="col-12 col-lg-8 p-5 headings-wrapper">
						<h3 class="secondary-heading"> same product, different price </h3>
						<h1 class="primary-heading"> find the cheapest. </h1>
					</div>
				</div>
				<div class="carousel-item caption-slide row no-gutters">
					<div class="col-lg-4 icon-holder">
						<img src="./assets/img/icons/slide-basket.png" alt="">
					</div>
					<div class="col-lg-8 headings-wrapper py-5">
						<h1 class="secondary-heading"> every time you shop, we save your 25%. </h1>
						<h1 class="primary-heading"> compare, shop, save. </h1>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<i class="fa fa-arrow-right" aria-hidden="true"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="category-slide-wrapper">
			<h2 class="category-title">
				grocery & staples |
				<a href="#" class="category-link"> See All </a>
			</h2>
			
			<div class="owl-carousel owl-loaded mb-5" id="category_slide">
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<!-- .product-item -->
						<div class="owl-item product-item">
							<h3 class="item-name"> Pantanjali atta noodles classic </h3>
							<div class="row no-gutters">
								<div class="col-6 image-holder">
									<img src="./assets/img/products/patanjali-atta-noodles-classic.png" alt="">
								</div>
								<div class="col-6 details-holder">
									<span class="price"> &#8377 49.00 1kg </span>
									<div class="stores">
										<a href="/provider?store=grofers" target="_blank"> Grofers </a>
										<a href="/provider?store=spencers" target="_blank"> Spencers </a>
									</div>
									<div class="icons-holder">
										<div class="delivery-truck"></div>
										<div class="credit-card"></div>
									</div>
								</div>
							</div>
							<div class="action-wrapper row no-gutters">
								<div class="col-6 compare-wrapper">
									<img src="./assets/img/icons/scale-blue.png" alt="">
									<button class="compare"> Compare </button>
								</div>
								<div class="col-6">
									<input type="number" class="quantity" value="1">
									<button class="add"> Add </button>
								</div>
							</div>
						</div>
						<!-- ./product-item -->
					</div>
				</div>
				<div class="owl-nav">
					<button class="slide-control owl-prev">
						<i class="fa fa-chevron-left"></i>
					</button>
					<button class="slide-control owl-next">
						<i class="fa fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</div>
		<!-- ./category-slide-wrapper -->

		<div class="entry-wrapper text-center">
			<h1 class="font-weight-normal display-4">
				combo<span class="text-danger">wala</span>
			</h1>
			<small class="text-muted">
				condition: supermarket/grocery/royal/available/atta, rice, oil/top 3, 4 cheapest products/less then 300, higher then 250
			</small>
		</div>


		<div class="stack-slide-wrapper">
			<div class="owl-carousel owl-loaded" id="stack_slide">
				<div class="owl-stage-outer">
					<div class="owl-stage">
						<!-- .product-item -->
						<div class="owl-item product-item">
							<div class="row no-gutters items-wrapper">
								<div class="col-4 item">
									<h4 class="item-name"> Aashirvaad : Atta - Whole wheat </h4>
									<img src="./assets/img/products/aashirvaad-atta-whole-wheat-1.png" class="item-image" alt="">
									<span class="price text-muted font-weight-bold"> Rs 42.00 1kg </span>
								</div>
								<div class="col-4 item">
									<h4 class="item-name"> Fortune rice bran health </h4>
									<img src="./assets/img/products/aashirvaad-atta-whole-wheat-2.png" class="item-image" alt="">
									<span class="price text-muted font-weight-bold"> Rs 42.00 1kg </span>
								</div>
								<div class="col-4 item">
									<h4 class="item-name"> Atta noodles yummy masala ashdjasdhasd asdhasjd  </h4>
									<img src="./assets/img/products/atta-noodles-ummy-masala-1.png" class="item-image" alt="">
									<span class="price text-muted font-weight-bold"> Rs 42.00 1kg </span>
								</div>
							</div>
							<div class="footer-wrapper row no-gutters mt-4">
								<div class="col-4 info-wrapper text-center">
									<span class="text-success text-uppercase font-weight-bold">
										Grocery
									</span>
									<span class="delivery-text text-muted text-uppercase d-block">
										<img src="./assets/img/icons/icon-delivery-truck.png" class="w-25 mx-auto" style="opacity: .6; filter: opacity(60);" alt="">
										<small> Tomorrow </small>
									</span>
								</div>
								<div class="col-4 price-wrapper" style="min-height: 70px;">
									<h4 class="text-danger m-0" style="text-align: center; vertical-align: center; line-height: 70px;"> Rs 240.00 </h4>
								</div>
								<div class="col-4 action-wrapper">
									<input type="number" name="q" class="quantity" value="1">
									<button class="add-to-cart"> Buy </button>
								</div>
							</div>
						</div>
						<!-- ./product-item -->
					</div>
				</div>
				<div class="owl-nav">
					<button class="slide-control owl-prev">
						<i class="fa fa-chevron-left"></i>
					</button>
					<button class="slide-control owl-next">
						<i class="fa fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</div>

	<div class="entry-wrapper text-center">
		<h1 class="font-weight-normal display-4">
			we save your<span class="text-danger">money</span>
		</h1>
	</div>

	<div class="content-grid row mx-5 px-5 mt-5">
		<div class="col-12 col-lg-4">
			<div class="title-holder">
				<img src="./assets/img/icons/icon-like.png" alt="">
				<span class="text-uppercase font-weight-bold"> Top Offers </span>
				<p class="description p-0">
					Finding good deals can be quite a chore. That's where we come in we scan prices, and do the match for you. Find those saving the most in "Top Offers"
				</p>
				<h4 class="text-danger text-uppercase hidden-lg-up mb-4">
					Save on average 30% on each shop!
				</h4>
			</div>
		</div>
		<div class="col-12 col-lg-4">
			<div class="title-holder">
				<img src="./assets/img/icons/icon-currency.png" alt="">
				<span class="text-uppercase font-weight-bold"> Swap & Save </span>
				<p class="description p-0">
					We'll let you know when you can swap an item to a cheaper alternative or save by choosing a product with a better unit price.
				</p>
				<h4 class="text-danger text-uppercase hidden-lg-up mb-4">
					Find the best deal today
				</h4>
			</div>
		</div>
		<div class="col-12 col-lg-4">
			<div class="title-holder">
				<img src="./assets/img/icons/icon-store.png" alt="">
				<span class="text-uppercase font-weight-bold"> Switch Stores </span>
				<p class="description p-0">
					We'll compare your basket across all stores and let you know if you can get it for less elsewhere. You can switch stores with one click!
				</p>
				<h4 class="text-danger text-uppercase hidden-lg-up mb-4">
					Compare Across 14 Supermarkets
				</h4>
			</div>
		</div>
		<div class="col-lg-4 hidden-md-down">
			<h4 class="text-danger text-uppercase">
				Save on average 30% on each shop!
			</h4>
		</div>
		<div class="col-lg-4 hidden-md-down">
			<h4 class="text-danger text-uppercase">
				Find the best deals today
			</h4>
		</div>
		<div class="col-lg-4 hidden-md-down">
			<h4 class="text-danger text-uppercase">
				Compare Across 14 Supermarkets
			</h4>
		</div>
	</div>
	<img src="./assets/img/sections/husband-wife.png" class="d-block mx-auto my-5" style="width: 80%; border-radius: 4px;" alt="">
	</main>
<?php $template_loader->load('footer', 'php'); ?>
</body>
</html>