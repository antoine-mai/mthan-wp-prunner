<?php defined('ABSPATH') || exit;

function mthan_widget_Downloads_output($widget_data) {
    $slug = 'Downloads';
    $title = mthan_get_widget_val($slug, $widget_data, 'title', esc_html__('Download Materials', 'mthan'));
    $items = mthan_get_widget_val($slug, $widget_data, 'items', []);
    if (empty($items)) return;
    ?>
    <div class="sidebar-widget services-widget downloads wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <?php if ($title) : ?>
            <div class="sidebar-title">
                <h4><?php echo esc_html($title); ?></h4>
            </div>
            <?php endif; ?>
            <ul class="clearfix">
                <?php foreach ($items as $item) : 
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
    <?php
}
