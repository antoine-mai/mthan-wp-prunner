<?php defined('ABSPATH') or die('Cheatin\' uh?');
get_header();
mthan_render_global_sections('before', 'blog');
mthan_render_page_sections('before');
mthan_render_page_sections('after');
mthan_render_global_sections('after', 'blog');
get_footer();