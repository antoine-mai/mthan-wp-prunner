<?php defined('ABSPATH') || exit;

function mthan_widget_Categories_output($widget_data) {
    $slug = 'Categories';
    $title = mthan_get_widget_val($slug, $widget_data, 'title', esc_html__('Categories', 'mthan'));
    $categories = get_categories(array('orderby' => 'count', 'order' => 'DESC', 'hide_empty' => true, 'exclude' => get_cat_ID('Uncategorized')));
    ?>
    <div class="sidebar-widget archives wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <?php if ($title) : ?>
            <div class="sidebar-title">
                <h4><?php echo esc_html($title); ?></h4>
            </div>
            <?php endif; ?>
            <ul>
                <?php foreach ($categories as $cat): 
                    $active = (is_category($cat->term_id)) ? ' class="active"' : '';
                ?>
                <li<?php echo $active; ?>>
                    <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                        <span class="ttl"><?php echo esc_html($cat->name); ?></span>
                        <span class="count"><?php echo (int)$cat->count; ?></span>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
}
