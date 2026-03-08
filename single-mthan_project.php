<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Single Project Template
 */
get_header();

// Render global sections
mthan_render_global_sections('before', 'project');

// Render Project-specific sections from the builder
mthan_render_post_sections('before');

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}

// Render footer sections
mthan_render_post_sections('after');
mthan_render_global_sections('after', 'project');

get_footer();
