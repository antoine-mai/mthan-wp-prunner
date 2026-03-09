<?php
/**
 * Page Layout: Blog
 */
$theme_options = get_option(MTHAN_THEME_OPTIONS);
$layouts_tabs  = !empty($theme_options['layouts_tabs']) ? $theme_options['layouts_tabs'] : [];
$blog_layout   = !empty($layouts_tabs['blog_layout']) ? $layouts_tabs['blog_layout'] : 'list';
$posts_per_page = !empty($layouts_tabs['blog_posts_per_page']) ? $layouts_tabs['blog_posts_per_page'] : 10;

?>
<div class="blog-content">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => $posts_per_page,
        'paged'          => $paged,
    );
    $blog_query = new WP_Query($args);

    if ($blog_query->have_posts()) :
        $row_class = ($blog_layout == 'list') ? 'blog-list-view' : 'row clearfix';
        echo '<div class="' . esc_attr($row_class) . '">';

        while ($blog_query->have_posts()) : $blog_query->the_post();
            if ($blog_layout == 'list') {
                echo '<div class="news-block alternate">';
                get_template_part('template-parts/content', 'list');
                echo '</div>';
            } else {
                echo '<div class="news-block col-lg-6 col-md-12 col-sm-12">';
                get_template_part('template-parts/content', 'grid-2');
                echo '</div>';
            }
        endwhile;
        echo '</div>';

        // Pagination
        $big = 999999999;
        $pagination = paginate_links(array(
            'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'    => '?paged=%#%',
            'current'   => max(1, $paged),
            'total'     => $blog_query->max_num_pages,
            'type'      => 'array',
            'prev_text' => '<span class="fa fa-caret-left"></span>',
            'next_text' => '<span class="fa fa-caret-right"></span>',
        ));

        if ($pagination) {
            echo '<div class="pagination-box"><ul class="styled-pagination">';
            foreach ($pagination as $link) {
                if (strpos($link, 'current') !== false) {
                    echo '<li><a href="#" class="active">' . strip_tags($link) . '</a></li>';
                } else {
                    echo '<li>' . $link . '</li>';
                }
            }
            echo '</ul></div>';
        }
        wp_reset_postdata();
    else :
        echo '<p>' . esc_html__('No posts found.', 'mthan') . '</p>';
    endif;
    ?>
</div>
