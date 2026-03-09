<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Mobile Menu Template
**/
$theme_options = get_option('mthan_theme_options');
$header_tabs   = !empty($theme_options['header_tabs']) ? $theme_options['header_tabs'] : [];

$nav_logo_url = mthan_get_img_url(
    $header_tabs['mobile_menu_logo'] ?? '', 
    mthan_get_img_url(
        $header_tabs['header_nav_logo'] ?? '', 
        mthan_get_img_url(
            $header_tabs['header_logo'] ?? '', 
            mthan_get_img_url($theme_options['logo'] ?? '', '')
        )
    )
);
?>
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn">
        <span class="icon flaticon-letter-x"></span>
    </div>
    
    <nav class="menu-box">
        <div class="nav-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url($nav_logo_url); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <!--Social Links-->
        <div class="social-links">
            <ul class="clearfix">
                <?php 
                $social_links = !empty($theme_options['social_links']) ? $theme_options['social_links'] : [];
                foreach ($social_links as $social) :
                    if (empty($social['url']) || empty($social['icon'])) continue;
                    $icon_url = mthan_get_img_url($social['icon']);
                    $s_url = mthan_get_link($social['url']);
                ?>
                    <li>
                        <a href="<?php echo esc_url($s_url); ?>">
                            <img src="<?php echo esc_url($icon_url); ?>" alt="<?php echo esc_attr($social['title'] ?? ''); ?>" style="width: 16px; height: 16px; object-fit: contain;">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
