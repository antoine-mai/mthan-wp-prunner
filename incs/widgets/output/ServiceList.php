<?php defined('ABSPATH') || exit;

function mthan_widget_ServiceList_output($widget_data) {
    $slug = 'ServiceList';
    $title = mthan_get_widget_val($slug, $widget_data, 'title', esc_html__('Our Services', 'mthan'));
    ?>
    <div class="sidebar-widget services-widget services-list wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <?php if ($title) : ?>
            <div class="sidebar-title">
                <h4><?php echo esc_html($title); ?></h4>
            </div>
            <?php endif; ?>
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
    <?php
}
