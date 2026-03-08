<?php defined('ABSPATH') or die('Cheatin\' uh?'); ?>

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
    <div class="sidebar-widget services-widget downloads wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <div class="sidebar-title">
                <h4><?php esc_html_e('Download Materials', 'mthan'); ?></h4>
            </div>
            <ul class="clearfix">
                <li><a href="#"><span class="icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/icon-pdf.png" alt=""></span><span class="txt"><?php esc_html_e('Company', 'mthan'); ?> <br><?php esc_html_e('Presentation', 'mthan'); ?> <i class="flaticon-play-button-1"></i></span></a></li>
                <li><a href="#"><span class="icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/icons/icon-pdf.png" alt=""></span><span class="txt">128 KB <br><?php esc_html_e('Download', 'mthan'); ?> <i class="flaticon-play-button-1"></i></span></a></li>
            </ul>
        </div>
    </div>

    <!-- Call To Action Widget -->
    <div class="sidebar-widget call-to-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <div class="image-layer" style="background-image:url(<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/background/call-to-bg-2.jpg);"></div>
            <div class="content">
                <div class="icon-box"><span class="flaticon-gardener"></span></div>
                <h5><?php esc_html_e('Let’s Start Your Project', 'mthan'); ?> <br><?php esc_html_e('Contact Experts', 'mthan'); ?></h5>
                <?php $admin_email = get_option('admin_email'); ?>
                <div class="email"><a href="mailto:<?php echo esc_attr($admin_email); ?>"><?php echo esc_html($admin_email); ?></a></div>
                <div class="phone"><a href="tel:(+5)6789012345">(+5) 678 90 12 345</a></div>
                <div class="link-box"><a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="theme-btn btn-style-four"><span class="btn-title"><?php esc_html_e('Get a Quote', 'mthan'); ?> <i class="arrow flaticon-play-button-1"></i></span></a></div>
            </div>
        </div>
    </div>

</aside>
