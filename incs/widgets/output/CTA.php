<?php defined('ABSPATH') || exit;

function mthan_widget_CTA_output($widget_data) {
    $slug = 'CTA';
    $title    = mthan_get_widget_val($slug, $widget_data, 'title', esc_html__('Let’s Start Your Project <br>Contact Experts', 'mthan'));
    $email    = mthan_get_widget_val($slug, $widget_data, 'email', get_option('admin_email'));
    $phone    = mthan_get_widget_val($slug, $widget_data, 'phone', '(+5) 678 90 12 345');
    $btn_text = mthan_get_widget_val($slug, $widget_data, 'btn_text', esc_html__('Get a Quote', 'mthan'));
    $btn_link = mthan_get_link(mthan_get_widget_val($slug, $widget_data, 'btn_link'));
    $bg       = mthan_sec_img(mthan_get_widget_val($slug, $widget_data, 'bg'), get_template_directory_uri() . '/assets/images/background/call-to-bg-2.jpg');
    ?>
    <div class="sidebar-widget call-to-widget wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <div class="image-layer" style="background-image:url(<?php echo esc_url($bg); ?>);"></div>
            <div class="content">
                <div class="icon-box"><span class="flaticon-gardener"></span></div>
                <h5><?php echo wp_kses_post($title); ?></h5>
                <div class="email"><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></div>
                <?php if ($phone) : ?>
                <div class="phone"><a href="tel:<?php echo esc_attr(str_replace(' ', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></div>
                <?php endif; ?>
                <div class="link-box"><a href="<?php echo esc_url($btn_link); ?>" class="theme-btn btn-style-four"><span class="btn-title"><?php echo esc_html($btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span></a></div>
            </div>
        </div>
    </div>
    <?php
}
