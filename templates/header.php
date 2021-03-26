<header>
	<!-- The navigation will collapse only on mobiles and tablets i.e viewport < 992px -->
	<nav class="navigation-wrapper">
		<!-- Using the Bootstrap's grid system to properly align navigation items. -->
		<div class="navigation row no-gutters">
			<div class="col-12 col-lg-2 logo-wrapper">
				<a href="./?ref=site-logo" target="_self">
					<img src="./assets/img/logo.png" class="site-logo" alt="Daamwala - You shop, we save">
				</a>
			</div>
			<div class="col-12 col-md-9 col-lg-3 search-wrapper">
				<form action="./" method="get">
					<!--
						Pre validations for search system because it'll took to much memory if
						multiple users type long search queries.
					-->
					<input type="search" name="s" max-length="60" placeholder="Start typing a product or brand name...">
					<button type="submit"></button>
				</form>
			</div>
			<div class="col-12 col-lg-1 quick-shop-wrapper hidden-md-down">
				<span class="icon-text text-muted">
					<img src="./assets/img/icons/quick-shop-icon.png" alt="Quick Shop">
					<span>Quick Shop</span>
				</span>
			</div>
			<!-- This is the empty space between the user details and quick shop icon. -->
			<div class="col-12 col-lg-2 hidden-md-down"></div>
			<div class="col-8 push-4 col-sm-6 push-sm-6 col-md-3 push-md-0 col-lg-2 push-lg-0 profile-wrapper row no-gutters">
				<div class="col-8 info-wrapper text-uppercase text-right">
					<small class="user-username"> User 23412 </small>
					<small class="user-localtion text-muted"> Kolkata </small>
				</div>
				<div class="col-4 avatar-wrapper">
					<img src="./assets/img/icons/avatar-boy.svg" alt="">
				</div>
			</div>
			<!-- Extra full-width column after user-profile on phones and tablets. -->
			<div class="col-12 hidden-lg-up"></div>
			<div class="col-10 push-1 col-sm-6 push-sm-3 col-lg-2 push-lg-0 counters-wrapper row no-gutters">
				<div class="col-6 row no-gutters store-counter">
					<div class="col-6 icon-holder"></div>
					<div class="col-6 count-holder"> 0 </div>
				</div>
				<div class="col-6 row no-gutters bag-counter">
					<div class="col-6 icon-holder"></div>
					<div class="col-6 count-holder"> 00 </div>
				</div>
			</div>
		</div>
	</nav>
	<div class="categories-wrapper">
		<a href="/categories?keywords=bakery+dairy+beverages" class="category-tag">
			<img src="./assets/img/icons/bakery.png" alt="">
			Bakery, Dairy, Beverages
		</a>
		<a href="/categories?keywords=fruits+vegetables" class="category-tag">
			<img src="./assets/img/icons/fruits.png" alt="">
			Fruits, Vegetables
		</a>
		<a href="/categories?keywords=fish+meat+eggs" class="category-tag">
			<img src="./assets/img/icons/fish.png" alt="">
			Fish, Meat, Eggs
		</a>
		<a href="/categories?keywords=grocery+staples" class="category-tag">
			<img src="./assets/img/icons/grocery-bag.png" alt="">
			Grocery & Staples
		</a>
	</div>
</header>