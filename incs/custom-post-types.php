<?php defined('ABSPATH') || exit;

/**
 * Register Custom Post Types for Mthan Theme.
 */
function mthan_register_custom_post_types() {
    
    // ── Mthan Page ─────────────────────────────────────────────────────
    register_post_type('mthan_page', array(
        'labels'      => array(
            'name'          => 'Pages',
            'singular_name' => 'Page',
        ),
        'public'      => true,
        'has_archive' => true,
        'hierarchical' => true,
        'menu_icon'   => 'dashicons-welcome-widgets-menus',
        'show_in_menu' => 'mthan-admin',
        'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes'),
    ));

    // ── Mthan Service ──────────────────────────────────────────────────
    register_post_type('mthan_service', array(
        'labels'      => array(
            'name'          => 'Services',
            'singular_name' => 'Service',
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-hammer',
        'show_in_menu' => 'mthan-admin',
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));

    // ── Mthan Project ──────────────────────────────────────────────────
    register_post_type('mthan_project', array(
        'labels'      => array(
            'name'          => 'Projects',
            'singular_name' => 'Project',
        ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-portfolio',
        'show_in_menu' => 'mthan-admin',
        'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
    ));
}
add_action('init', 'mthan_register_custom_post_types');
