<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Sticky Header Template
**/
$theme_options = get_option('mthan_theme_options');
$header_tabs   = !empty($theme_options['header_tabs']) ? $theme_options['header_tabs'] : [];
$header_layout = !empty($header_tabs['header_layout']) ? $header_tabs['header_layout'] : 'style-1';

if (empty($header_tabs['header_sticky'])) {
    return;
}

$sticky_logo_url = mthan_get_img_url($header_tabs['header_sticky_logo'] ?? '', mthan_get_img_url($theme_options['logo'] ?? '', ''));

// Determine button settings based on active style
if ($header_layout === 'style-2') {
    $btn_text     = !empty($header_tabs['header_2_quote_btn_text']) ? $header_tabs['header_2_quote_btn_text'] : '';
    $btn_url      = mthan_get_link($header_tabs['header_2_quote_btn_url'] ?? '#');
    $btn_icon_url = !empty($header_tabs['header_2_quote_btn_icon']) ? mthan_get_img_url($header_tabs['header_2_quote_btn_icon']) : '';
} else {
    $btn_text     = !empty($header_tabs['header_1_btn_text']) ? $header_tabs['header_1_btn_text'] : '';
    $btn_url      = mthan_get_link($header_tabs['header_1_btn_url'] ?? '#');
    $btn_icon_url = !empty($header_tabs['header_1_btn_icon']) ? mthan_get_img_url($header_tabs['header_1_btn_icon']) : '';
}
?>
<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                <img src="<?php echo esc_url($sticky_logo_url); ?>" alt="<?php bloginfo('name'); ?>" />
            </a>
        </div>
        <!--Right Col-->
        <div class="pull-right clearfix">
            <!-- Main Menu -->
            <nav class="main-menu clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </nav><!-- Main Menu End-->

            <?php if (!empty($btn_text)) { ?>
            <div class="contact-link">
                <a href="<?php echo esc_url($btn_url); ?>" class="theme-btn btn-style-three">
                    <?php 
                    if ($btn_icon_url && (strpos($btn_icon_url, 'http') === 0 || strpos($btn_icon_url, '/') === 0)) : ?>
                        <img src="<?php echo esc_url($btn_icon_url); ?>" alt="">
                    <?php elseif ($btn_icon_url) : ?>
                        <i class="<?php echo esc_attr($btn_icon_url); ?>"></i>
                    <?php else : ?>
                        <span class="flaticon-smartphone icon-fallback"></span>
                    <?php endif; ?>
                    <span class="btn-title">
                        <?php echo esc_html($btn_text); ?> 
                    </span>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div><!-- End Sticky Menu -->
