<?php defined('ABSPATH') or die('Cheatin\' uh?'); 
$theme_options = get_option(MTHAN_THEME_OPTIONS);

// CTA Data
$cta_title     = !empty($theme_options['sidebar_cta_title']) ? $theme_options['sidebar_cta_title'] : esc_html__('Let’s Start Your Project <br>Contact Experts', 'mthan');
$cta_email     = !empty($theme_options['sidebar_cta_email']) ? $theme_options['sidebar_cta_email'] : get_option('admin_email');
$cta_phone     = !empty($theme_options['sidebar_cta_phone']) ? $theme_options['sidebar_cta_phone'] : '(+5) 678 90 12 345';
$cta_btn_text  = !empty($theme_options['sidebar_cta_btn_text']) ? $theme_options['sidebar_cta_btn_text'] : esc_html__('Get a Quote', 'mthan');
$cta_btn_url   = !empty($theme_options['sidebar_cta_btn_link']['url']) ? $theme_options['sidebar_cta_btn_link']['url'] : '#';
$cta_bg        = !empty($theme_options['sidebar_cta_bg']) ? $theme_options['sidebar_cta_bg'] : get_template_directory_uri() . '/assets/images/background/call-to-bg-2.jpg';

// Download Data
$download_title = !empty($theme_options['sidebar_download_title']) ? $theme_options['sidebar_download_title'] : esc_html__('Download Materials', 'mthan');
$downloads      = !empty($theme_options['sidebar_downloads']) ? $theme_options['sidebar_downloads'] : [];
?>

<aside class="sidebar services-sidebar">

    <!-- Services List -->
    <div class="sidebar-widget services-widget services-list wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <div class="sidebar-title">
                <h4><?php esc_html_e('Our Services', 'mthan'); ?></h4>
            </div>
            <ul>
                <?php
                $current_id = get_the_ID();
                $services = new WP_Query(array(
                    'post_type'      => 'mthan_service',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order',
                    'order'          => 'ASC'
                ));
                if ($services->have_posts()) :
                    while ($services->have_posts()) : $services->the_post();
                        $active = ($current_id === get_the_ID()) ? ' class="active"' : '';
                ?>
                        <li<?php echo $active; ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </ul>
        </div>
    </div>

    <!-- Download Materials -->
    <?php if (!empty($downloads)) : ?>
    <div class="sidebar-widget services-widget downloads wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <div class="sidebar-title">
                <h4><?php echo wp_kses_post($download_title); ?></h4>
            </div>
            <ul class="clearfix">
                <?php foreach ($downloads as $item) : 
                    $file_url = !empty($item['file']) ? $item['file'] : '#';
                    $icon_url = !empty($item['icon']) ? $item['icon'] : get_template_directory_uri() . '/assets/images/icons/icon-pdf.png';
                ?>
                <li>
                    <a href="<?php echo esc_url($file_url); ?>" target="_blank">
                        <span class="icon"><img src="<?php echo esc_url($icon_url); ?>" alt=""></span>
                        <span class="txt"><?php echo wp_kses_post($item['name']); ?> <br><?php echo esc_html($item['subtitle']); ?> <i class="flaticon-play-button-1"></i></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>

    <!-- Call To Action Widget -->
    <div class="sidebar-widget call-to-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <div class="image-layer" style="background-image:url(<?php echo esc_url($cta_bg); ?>);"></div>
            <div class="content">
                <div class="icon-box"><span class="flaticon-gardener"></span></div>
                <h5><?php echo wp_kses_post($cta_title); ?></h5>
                <div class="email"><a href="mailto:<?php echo esc_attr($cta_email); ?>"><?php echo esc_html($cta_email); ?></a></div>
                <div class="phone"><a href="tel:<?php echo esc_attr(str_replace(' ', '', $cta_phone)); ?>"><?php echo esc_html($cta_phone); ?></a></div>
                <div class="link-box"><a href="<?php echo esc_url($cta_btn_url); ?>" class="theme-btn btn-style-four"><span class="btn-title"><?php echo esc_html($cta_btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span></a></div>
            </div>
        </div>
    </div>

</aside>
