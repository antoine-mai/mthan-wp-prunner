<?php
/**
 * Template Name: Shop Page
 * 
 * This template can be used to display a custom shop layout on a standard WordPress page.
 **/

get_header();

$sidebar_settings = mthan_get_sidebar_settings();
$sidebar_enabled  = $sidebar_settings['enabled'];
$sidebar_pos      = $sidebar_settings['position'];

mthan_render_global_sections('before', 'shop');
mthan_render_page_sections('before');
?>

<div class="sidebar-page-container shop-page">
    <div class="auto-container">
        <div class="row clearfix">
            
            <?php if ($sidebar_enabled && $sidebar_pos == 'left') : ?>
            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <?php get_template_part('template-parts/sidebar', 'blog'); ?>
            </div>
            <?php endif; ?>

            <!--Content Side-->
            <div class="content-side <?php echo ($sidebar_enabled) ? 'col-xl-9 col-lg-8' : 'col-lg-12'; ?> col-md-12 col-sm-12">
                <div class="our-shop">
                    <?php 
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            
                            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                                <div class="shop-upper-box clearfix">
                                    <div class="items-label">
                                        <?php woocommerce_result_count(); ?>
                                    </div>
                                    <div class="sort-by">
                                        <?php woocommerce_catalog_ordering(); ?>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="shop-content">
                                <?php the_content(); ?>
                            </div>
                            
                        <?php endwhile;
                    endif;
                    ?>
                </div>
            </div>

            <?php if ($sidebar_enabled && $sidebar_pos == 'right') : ?>
            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <?php get_template_part('template-parts/sidebar', 'blog'); ?>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<?php 
mthan_render_page_sections('after');
mthan_render_global_sections('after', 'shop');
get_footer(); 
?>
