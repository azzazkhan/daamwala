<?php
	if (! defined('ABS_PATH')) define('ABS_PATH', dirname(__FILE__) . '../..');
	if (! defined('MOD_PATH')) define('MOD_PATH', ABS_PATH . '/modules');

	require_once MOD_PATH . '/utils/functions.php';
function products_table($store, $args = array()) { ?>
<div class="products-table">
	<div class="table-header row no-gutters">
		<h3 class="col-4 col-md-3 col-xl-2 store-name"> <?php print( $store ); ?> </h3>
		<div class="col-8 col-md-9 col-xl-2 icons-wrapper">
<?php
	if ( isset( $args['icons'] ) && is_array( $args['icons'] ) && ! empty( $args['icons'] ) ):
		foreach( $args['icons'] as $icon ):
?>
			<span class="icon <?php print( $icon ); ?>"></span>
<?php
		endforeach;
	endif;
?>
		</div>
	</div>


<?php
	if ( isset( $args['items'] ) && is_array( $args['items'] ) && !empty( $args['items'] ) ):
		foreach( $args['items'] as $item ):
?>
	<div class="product-row row no-gutters">
		<div class="col-4 item-name-wrapper"> <?php print( $item[0] ); ?> </div>
		<div class="col-3 item-price-wrapper"> &#8377; <?php print( $item[1] );?> <?php print( $item[2] ); ?> </div>
		<div class="col-4 push-1 row no-gutters action-wrapper">
			<div class="col-6 cart-wrapper">
				<select class="quantity"></select>
				<button class="btn-add"> Add </button>
			</div>
			<div class="col-6 compare-wrapper">
				<span class="icon scale"></span>
				<button class="btn-compare"> Compare </button>
			</div>
		</div>
	</div>
<?php
		endforeach;
	endif;
?>
</div>
<?php } ?>