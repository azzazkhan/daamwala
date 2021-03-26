<?php
	if (! defined('ABS_PATH')) define('ABS_PATH', dirname(__FILE__) . '../..');
	if (! defined('MOD_PATH')) define('MOD_PATH', ABS_PATH . '/modules');

	require_once MOD_PATH . '/utils/functions.php';
	$args = array(
		array( 'price', 'quantity', 'store', array('icon') )
	);
function compare_table($name, $image, $items = array()) { ?>
<div class="compare-table">
	<div class="compare-header">
		<a href="#"> Compare </a> : <?php echo $name; ?>
	</div>
	<div class="row no-gutters">
		<div class="col-3 product-image-wrapper">
			<img src="./assets/img/products/<?php echo $image; ?>.png" alt="Image not available">
		</div>
		<div class="col-9 rows-wrapper">
<?php foreach( $items as $item ): ?>
			<div class="row no-gutters">
<?php if ( isset( $item[4] ) && $item[4] == 'saver' ): ?>
				<span class="bag-icon"></span>
<?php endif; ?>
				<div class="col-2 price-wrapper"> <span class="inr">&#8377;</span> <?php echo $item[0]; ?> </div>
				<div class="col-2 quantity-wrapper"> <?php echo $item[1]; ?> </div>
				<div class="col-2 store-wrapper"> <a href="#"> <?php echo $item[2] ?> </a> </div>
				<div class="col-3 icons-wrapper">
<?php foreach( $item[3] as $icon ): ?>
					<span class="icon <?php echo $icon ?>"></span>
<?php endforeach; ?>
				</div>
				<div class="col-3 action-wrapper">
					<select class="quantity"></select>
					<button class="add"> Add </button>
				</div>
			</div>
<?php endforeach; ?>
		</div>
	</div>
</div>
<?php }