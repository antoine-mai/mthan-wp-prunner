<?php defined('ABSPATH') || exit;

function mthan_widget_RecentPosts_output($widget_data) {
    $slug = 'RecentPosts';
    $title = mthan_get_widget_val($slug, $widget_data, 'title', esc_html__('Popular Post', 'mthan'));
    $count = mthan_get_widget_val($slug, $widget_data, 'count', 3);

    $popular_posts = new WP_Query(array(
        'posts_per_page'      => $count,
        'meta_key'            => 'post_views_count',
        'orderby'             => 'meta_value_num',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
    ));

    if (!$popular_posts->have_posts()) {
        $popular_posts = new WP_Query(array(
            'posts_per_page'      => $count,
            'orderby'             => 'comment_count',
            'order'               => 'DESC',
            'ignore_sticky_posts' => true,
        ));
    }
    ?>
    <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="widget-inner">
            <?php if ($title) : ?>
            <div class="sidebar-title">
                <h4><?php echo esc_html($title); ?></h4>
            </div>
            <?php endif; ?>
            <?php while ($popular_posts->have_posts()): $popular_posts->the_post(); ?>
            <div class="post">
                <?php if (has_post_thumbnail()): ?>
                <figure class="post-thumb">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('thumbnail', ['alt' => get_the_title()]); ?>
                    </a>
                </figure>
                <?php endif; ?>
                <h5 class="text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <div class="info"><?php echo get_the_date(); ?></div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </div>
    <?php
}
