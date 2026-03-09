<?php defined('ABSPATH') or die('Cheatin\' uh?'); 
/**
 * Header Style 2
 * 
 * @package Mthan
 * @since 1.0.0
 **/
$theme_options      = get_option('mthan_theme_options');
$header_tabs        = !empty($theme_options['header_tabs']) ? $theme_options['header_tabs'] : [];
$social_links       = !empty($theme_options['social_links']) ? $theme_options['social_links'] : [];

// 1. Data URLs & Text
$quote_btn_url      = mthan_get_link($header_tabs['header_2_quote_btn_url'] ?? '#');
$quote_btn_icon_url = !empty($header_tabs['header_2_quote_btn_icon']) ? mthan_get_img_url($header_tabs['header_2_quote_btn_icon']) : '';

// 2. Logo URLs
$logo_url           = mthan_get_img_url($header_tabs['header_logo'] ?? '', get_template_directory_uri() . '/assets/images/logo.png');

// 3. Menus
$menu_items = !empty($header_tabs['menu_items']) ? $header_tabs['menu_items'] : [];
?>
<header class="main-header header-style-two">
    <div class="header-top-two">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left">
                    <?php if (!empty($header_tabs['header_2_quote_text'])) { ?>
                    <div class="quote-link">
                        <?php echo esc_html($header_tabs['header_2_quote_text']); ?> 
                        <?php if (!empty($header_tabs['header_2_quote_btn_text'])) { 
                             $quote_btn_url = mthan_get_link($header_tabs['header_2_quote_btn_url'] ?? '#');
                        ?>
                        <a href="<?php echo esc_url($quote_btn_url); ?>">
                            <?php echo esc_html($header_tabs['header_2_quote_btn_text']); ?>
                            <span class="icon flaticon-play-button-1"></span>
                        </a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="top-right">
                    <div class="top-links">
                        <ul class="clearfix">
                            <?php if (!empty($theme_options['contact_address'])) { ?>
                            <li>
                                <span class="icon flaticon-placeholder-3"></span>
                                <?php echo esc_html($theme_options['contact_address']); ?>
                            </li>
                            <?php } ?>
                            <?php if (!empty($theme_options['contact_email'])) { ?>
                            <li>
                                <a href="mailto:<?php echo esc_attr($theme_options['contact_email']); ?>">
                                    <span class="icon flaticon-envelope-1"></span>
                                    <?php echo esc_html($theme_options['contact_email']); ?>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if (!empty($theme_options['contact_hours'])) { ?>
                            <li>
                                <span class="icon flaticon-fast"></span>
                                <?php echo esc_html($theme_options['contact_hours']); ?>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper-two">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                            <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>">
                        </a>
                    </div>
                </div>
                
                <div class="iso">
                    <div class="iso-icon">
                        <span class="icon">
                            <?php 
                            $iso_img_url = mthan_get_img_url($header_tabs['header_2_iso_image'] ?? '', get_template_directory_uri() . '/assets/images/icons/iso-icon.png');
                            ?>
                            <img src="<?php echo esc_url($iso_img_url); ?>" alt="">
                        </span>
                    </div>
                    <div class="number">
                        <?php echo esc_html($header_tabs['header_2_iso_title'] ?? 'ISO 9001:2015'); ?>
                    </div>
                    <div class="txt">
                        <?php echo esc_html($header_tabs['header_2_iso_text'] ?? 'Certified Landscape Designer'); ?>
                    </div>
                </div>

                <div class="help clearfix">
                    <div class="info">
                        <div class="call-icon">
                            <span class="flaticon-headphones-2"></span>
                        </div>
                        <div class="txt">
                            <?php echo esc_html($header_tabs['header_2_help_text'] ?? 'Need Help?'); ?>
                        </div>
                        <div class="phone">
                            <a href="tel:<?php echo esc_attr($theme_options['contact_phone'] ?? ''); ?>">
                                <?php echo esc_html($theme_options['contact_phone'] ?? ''); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                        <span class="icon flaticon-menu-1"></span>
                    </div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <?php 
                                $menu_items = !empty($header_tabs['menu_items']) ? $header_tabs['menu_items'] : [];
                                foreach ($menu_items as $item) :
                                    $has_submenu = !empty($item['submenu']);
                                    $li_class = $has_submenu ? 'dropdown' : '';
                                    if (!empty($item['mega_menu'])) {
                                        $li_class .= ' megamenu';
                                    }
                                ?>
                                <li class="<?php echo esc_attr($li_class); ?>">
                                    <?php 
                                    $url = mthan_get_link($item['url'] ?? '#');
                                    ?>
                                    <a href="<?php echo esc_url($url); ?>" target="<?php echo esc_attr($item['target'] ?? (is_array($item['url'] ?? null) ? ($item['url']['target'] ?? '_self') : '_self')); ?>">
                                        <?php echo esc_html($item['title'] ?? ''); ?>
                                    </a>
                                    <?php if ($has_submenu) : ?>
                                    <ul>
                                        <?php foreach ($item['submenu'] as $sub) : ?>
                                        <li>
                                            <?php 
                                            $sub_url = mthan_get_link($sub['url'] ?? '#');
                                            ?>
                                            <a href="<?php echo esc_url($sub_url); ?>" target="<?php echo esc_attr($sub['target'] ?? (is_array($sub['url'] ?? null) ? ($sub['url']['target'] ?? '_self') : '_self')); ?>">
                                                <?php echo esc_html($sub['title'] ?? ''); ?>
                                            </a>
                                        </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="more-links clearfix">
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
                                        <span class="t-tip-box">
                                            <span class="t-t-text"><?php echo esc_html($social['title'] ?? ''); ?></span>
                                        </span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <?php get_template_part('template-parts/sticky-header'); ?>

    <?php get_template_part('template-parts/mobile-menu'); ?>
</header>
