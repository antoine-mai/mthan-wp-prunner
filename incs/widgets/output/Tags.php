<?php defined('ABSPATH') || exit;

function mthan_widget_Tags_output($widget_data) {
    $slug = 'Tags';
    $title = mthan_get_widget_val($slug, $widget_data, 'title', esc_html__('Tags', 'mthan'));
    $tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'hide_empty' => true));
    if (empty($tags)) return;
    ?>
    <div class="sidebar-widget popular-tags wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <?php if ($title) : ?>
            <div class="sidebar-title">
                <h4><?php echo esc_html($title); ?></h4>
            </div>
            <?php endif; ?>
            <ul class="tags-list clearfix">
                <?php foreach ($tags as $tag): ?>
                <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
}
