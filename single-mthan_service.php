<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Single Service Template
 */
get_header();

// Render global sections (Page Banner, etc.)
mthan_render_global_sections('before', 'service');

// Render Service-specific sections from the builder
mthan_render_post_sections('before');

if (have_posts()) {
    while (have_posts()) {
        the_post();
        // Even if we removed the editor support, we call the_content if there's any stray content or for plugin support
        the_content();
    }
}

// Render footer sections
mthan_render_post_sections('after');
mthan_render_global_sections('after', 'service');

get_footer();
