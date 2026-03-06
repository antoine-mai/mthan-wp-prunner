<?php defined('ABSPATH') || exit;

// Register mthan_page Custom Post Type
function mthan_register_cpt_page() {
    $labels = [
        'name'                  => _x('Pages', 'Post Type General Name', 'mthan-wp'),
        'singular_name'         => _x('Page', 'Post Type Singular Name', 'mthan-wp'),
        'menu_name'             => __('Pages', 'mthan-wp'),
        'name_admin_bar'        => __('Page', 'mthan-wp'),
        'archives'              => __('Page Archives', 'mthan-wp'),
        'attributes'            => __('Page Attributes', 'mthan-wp'),
        'parent_item_colon'     => __('Parent Page:', 'mthan-wp'),
        'all_items'             => __('All Pages', 'mthan-wp'),
        'add_new_item'          => __('Add New Page', 'mthan-wp'),
        'add_new'               => __('Add New', 'mthan-wp'),
        'new_item'              => __('New Page', 'mthan-wp'),
        'edit_item'             => __('Edit Page', 'mthan-wp'),
        'update_item'           => __('Update Page', 'mthan-wp'),
        'view_item'             => __('View Page', 'mthan-wp'),
        'view_items'            => __('View Pages', 'mthan-wp'),
        'search_items'          => __('Search Page', 'mthan-wp'),
        'not_found'             => __('Not found', 'mthan-wp'),
        'not_found_in_trash'    => __('Not found in Trash', 'mthan-wp'),
        'featured_image'        => __('Featured Image', 'mthan-wp'),
        'set_featured_image'    => __('Set featured image', 'mthan-wp'),
        'remove_featured_image' => __('Remove featured image', 'mthan-wp'),
        'use_featured_image'    => __('Use as featured image', 'mthan-wp'),
        'insert_into_item'      => __('Insert into page', 'mthan-wp'),
        'uploaded_to_this_item' => __('Uploaded to this page', 'mthan-wp'),
        'items_list'            => __('Pages list', 'mthan-wp'),
        'items_list_navigation' => __('Pages list navigation', 'mthan-wp'),
        'filter_items_list'     => __('Filter pages list', 'mthan-wp'),
    ];
    $args = [
        'label'                 => __('Page', 'mthan-wp'),
        'description'           => __('Custom Pages with Builder', 'mthan-wp'),
        'labels'                => $labels,
        'supports'              => ['title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'excerpt'],
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => 'mthan-admin',
        'menu_position'         => 3,
        'menu_icon'             => get_template_directory_uri() . '/assets/images/mthan-logo.png',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rewrite'               => array(
            'slug'       => '/',
            'with_front' => false
        ),
    ];
    register_post_type('mthan_page', $args);
}
add_action('init', 'mthan_register_cpt_page');

/**
 * Update permalinks for mthan_page to remove the post type slug from URL.
 */
function mthan_page_permalink($post_link, $post) {
    if ('mthan_page' !== $post->post_type || 'publish' !== $post->post_status) {
        return $post_link;
    }
    
    // Remove the mthan_page slug if it's there
    $post_link = str_replace('/mthan_page/', '/', $post_link);
    return $post_link;
}
add_filter('post_type_link', 'mthan_page_permalink', 10, 2);

/**
 * Handle custom permalink resolution at the root level.
 */
function mthan_parse_request_mthan_page($query) {
    if (!$query->is_main_query() || count($query->query) != 2 || !isset($query->query['page'])) {
        return;
    }
    
    if (!empty($query->query['name'])) {
        $query->set('post_type', array('post', 'page', 'mthan_page'));
    }
}
add_action('pre_get_posts', 'mthan_parse_request_mthan_page');
