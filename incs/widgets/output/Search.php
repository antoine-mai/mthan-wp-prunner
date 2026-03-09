<?php defined('ABSPATH') || exit;

function mthan_widget_Search_output($widget_data) {
    $slug = 'Search';
    $placeholder = mthan_get_widget_val($slug, $widget_data, 'placeholder', esc_html__('Enter Keyword ...', 'mthan'));
    $theme_options = get_option(MTHAN_THEME_OPTIONS);
    ?>
    <div class="sidebar-widget search-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <form role="search" method="get" action="<?php echo esc_url(!empty($theme_options['default_search_page']) ? get_permalink($theme_options['default_search_page']) : home_url('/')); ?>">
                <div class="form-group">
                    <input type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php echo esc_attr($placeholder); ?>">
                    <button type="submit"><span class="icon fa fa-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <?php
}
