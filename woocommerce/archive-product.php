<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked mthan_woocommerce_wrapper_start - 10 (Custom)
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<div class="shop-upper-box clearfix">
            <div class="items-label">
                <?php woocommerce_result_count(); ?>
            </div>
            <div class="sort-by">
                <?php woocommerce_catalog_ordering(); ?>
            </div>
        </div>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
    // We already handled sort and result count above to match theme layout
	// do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			global $product;
			if ( empty( $product ) || ! $product->is_visible() ) continue;

			$columns = wc_get_loop_prop( 'columns' );
			$classes = array('shop-item', 'wow', 'fadeInUp');
			$classes[] = ($columns == 3) ? 'col-xl-4 col-lg-6 col-md-6 col-sm-12' : 'col-lg-3 col-md-6 col-sm-12';
			?>
			<div <?php wc_product_class( $classes, $product ); ?>>
				<div class="inner-box">
					<div class="image">
						<a href="<?php the_permalink(); ?>">
							<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
						</a>
					</div>
					<div class="options">
						<ul class="option-box clearfix">
							<?php if (class_exists('YITH_WCWL')) : ?>
							<li class="add-fav"><?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?></li>
							<?php else : ?>
							<li class="add-fav"><a href="#"><span class="flaticon-heart-1"></span><span class="t-tip">Wishlist</span></a></li>
							<?php endif; ?>
							<li><?php woocommerce_template_loop_add_to_cart(); ?></li>
							<li class="zoom-btn">
								<a href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="lightbox-image" data-fancybox="products">
									<span class="flaticon-expand"></span><span class="t-tip">Preview</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="lower-content">
						<?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?>
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<div class="price"><?php echo $product->get_price_html(); ?></div>
					</div>
				</div>
			</div>
			<?php
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 * @hooked mthan_woocommerce_wrapper_end - 10 (Custom)
 */
do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
