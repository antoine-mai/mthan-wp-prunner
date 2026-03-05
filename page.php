<?php defined('ABSPATH') or die('Cheatin\' uh?');
get_header();
mthan_render_global_sections('before', mthan_get_layout_type());
mthan_render_page_sections('before');
if (have_posts()) :
    while (have_posts()) :
        the_post();
        the_content();
    endwhile;
endif;
mthan_render_page_sections('after');
mthan_render_global_sections('after', mthan_get_layout_type());
get_footer();