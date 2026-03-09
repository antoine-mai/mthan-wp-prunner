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
    <?php mthan_render_sidebar($sidebar_id); ?>
</aside>
