<?php defined('ABSPATH') or die('Cheatin\' uh?'); 
$theme_options = get_option(MTHAN_THEME_OPTIONS);
$sidebar_settings = mthan_get_sidebar_settings();
$sidebar_id = !empty($sidebar_settings['id']) ? $sidebar_settings['id'] : 'blog-sidebar';

// CTA Data logic
$cta_title     = !empty($theme_options['sidebar_cta_title']) ? $theme_options['sidebar_cta_title'] : esc_html__('Let’s Start Your Project <br>Contact Experts', 'mthan');
$cta_email     = !empty($theme_options['sidebar_cta_email']) ? $theme_options['sidebar_cta_email'] : get_option('admin_email');
$cta_phone     = !empty($theme_options['sidebar_cta_phone']) ? $theme_options['sidebar_cta_phone'] : '(+5) 678 90 12 345';
$cta_btn_text  = !empty($theme_options['sidebar_cta_btn_text']) ? $theme_options['sidebar_cta_btn_text'] : esc_html__('Get a Quote', 'mthan');
$cta_btn_url   = !empty($theme_options['sidebar_cta_btn_link']['url']) ? $theme_options['sidebar_cta_btn_link']['url'] : '#';
$cta_bg        = !empty($theme_options['sidebar_cta_bg']) ? $theme_options['sidebar_cta_bg'] : get_template_directory_uri() . '/assets/images/background/call-to-bg-2.jpg';
?>

<aside class="sidebar blog-sidebar">

    <?php if (is_active_sidebar($sidebar_id)): ?>
        <?php dynamic_sidebar($sidebar_id); ?>
    <?php else: ?>
        <!-- Search Widget -->
        <div class="sidebar-widget search-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <form role="search" method="get" action="<?php echo esc_url(!empty($theme_options['default_search_page']) ? get_permalink($theme_options['default_search_page']) : home_url('/')); ?>">
                    <div class="form-group">
                        <?php $placeholder = !empty($theme_options['search_placeholder']) ? $theme_options['search_placeholder'] : esc_html__('Enter Keyword ...', 'mthan'); ?>
                        <input type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>"
                            placeholder="<?php echo esc_attr($placeholder); ?>">
                        <button type="submit"><span class="icon fa fa-search"></span></button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="sidebar-widget archives wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <div class="sidebar-title">
                    <h4><?php esc_html_e('Categories', 'mthan'); ?></h4>
                </div>
                <ul>
                    <?php
                    $categories = get_categories(array('orderby' => 'count', 'order' => 'DESC', 'hide_empty' => true, 'exclude' => get_cat_ID('Uncategorized')));
                    foreach ($categories as $cat):
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

        <!-- Popular Posts Widget -->
        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="widget-inner">
                <div class="sidebar-title">
                    <h4><?php esc_html_e('Popular Post', 'mthan'); ?></h4>
                </div>
                <?php
                $popular_posts = new WP_Query(array(
                    'posts_per_page' => 3,
                    'meta_key' => 'post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'ignore_sticky_posts' => true,
                ));
                // Fallback: if not using view counter, get by comments
                if (!$popular_posts->have_posts()) {
                    $popular_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'orderby' => 'comment_count',
                        'order' => 'DESC',
                        'ignore_sticky_posts' => true,
                    ));
                }
                while ($popular_posts->have_posts()):
                    $popular_posts->the_post(); ?>
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
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>

        <!-- Tags Widget -->
        <?php $tags = get_tags(array('orderby' => 'count', 'order' => 'DESC', 'hide_empty' => true)); ?>
        <?php if (!empty($tags)): ?>
            <div class="sidebar-widget popular-tags wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="widget-inner">
                    <div class="sidebar-title">
                        <h4><?php esc_html_e('Tags', 'mthan'); ?></h4>
                    </div>
                    <ul class="tags-list clearfix">
                        <?php foreach ($tags as $tag): ?>
                            <li><a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a></li>
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
                    <?php if (!empty($cta_phone)) : ?>
                        <div class="phone"><a href="tel:<?php echo esc_attr(str_replace(' ', '', $cta_phone)); ?>"><?php echo esc_html($cta_phone); ?></a></div>
                    <?php endif; ?>
                    <div class="link-box"><a href="<?php echo esc_url($cta_btn_url); ?>" class="theme-btn btn-style-four"><span class="btn-title"><?php echo esc_html($cta_btn_text); ?> <i class="arrow flaticon-play-button-1"></i></span></a></div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</aside>
aside>