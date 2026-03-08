<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Single Service Template
 */
get_header();

// Render global sections (Page Banner, etc.)
mthan_render_global_sections('before', 'service');
?>
<?php
$theme_options = get_option(MTHAN_THEME_OPTIONS);
$spacing = !empty($theme_options['service_spacing']) ? $theme_options['service_spacing'] : ['top' => '100', 'bottom' => '100', 'unit' => 'px'];
$sec_style = '';
if (!empty($spacing)) {
    $unit = !empty($spacing['unit']) ? $spacing['unit'] : 'px';
    if (isset($spacing['top'])) $sec_style .= 'padding-top:' . $spacing['top'] . $unit . ';';
    if (isset($spacing['bottom'])) $sec_style .= 'padding-bottom:' . $spacing['bottom'] . $unit . ';';
}
?>

<section class="services-page-section" <?php if ($sec_style) echo 'style="' . esc_attr($sec_style) . '"'; ?>>
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side-->
            <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="service-details">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); 
                        $service_meta = get_post_meta(get_the_ID(), MTHAN_SERVICE_OPTIONS, true);
                        // The project_meta check is removed as per the instruction to simplify icon fetching
                        // and directly apply fallback to service_meta.
                        
                        $icon = !empty($service_meta['service_icon']) ? $service_meta['service_icon'] : 'flaticon-hedge'; // Fallback
                    ?>
                        
                        <!-- Service Pagination -->
                        <?php 
                        $prev_service = get_previous_post();
                        $next_service = get_next_post();
                        if ($prev_service || $next_service):
                        ?>
                        <div class="service-pagination clearfix" style="margin-bottom: 30px;">
                            <?php if ($prev_service): ?>
                            <div class="prev-service pull-left">
                                <a href="<?php echo esc_url(get_permalink($prev_service->ID)); ?>" style="color: #24a77e; font-weight: 600;">
                                    <span class="fa fa-angle-left"></span> <?php esc_html_e('Prev Service', 'mthan'); ?>
                                </a>
                            </div>
                            <?php endif; ?>

                            <?php if ($next_service): ?>
                            <div class="next-service pull-right">
                                <a href="<?php echo esc_url(get_permalink($next_service->ID)); ?>" style="color: #24a77e; font-weight: 600;">
                                    <?php esc_html_e('Next Service', 'mthan'); ?> <span class="fa fa-angle-right"></span>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                        <div class="sec-title">
                            <div class="title-icon"><span class="icon"><?php echo mthan_get_icon_html($icon); ?></span></div>
                            <div class="subtitle"><?php esc_html_e('Service Details', 'mthan'); ?></div>
                            <h2><?php the_title(); ?></h2>
                        </div>
                        
                        <?php 
                        // Render Service-specific sections inside the content-side
                        mthan_render_post_sections('before');
                        
                        the_content();
                        ?>

                    <?php endwhile; endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
// Render footer sections
mthan_render_post_sections('after');
mthan_render_global_sections('after', 'service');

get_footer();
?>
