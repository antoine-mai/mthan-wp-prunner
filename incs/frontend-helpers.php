<?php defined('ABSPATH') || exit;
/**
 * Frontend Helpers — Minimal stubs to prevent crashes.
 */

/**
 * Render global sections from Theme Options.
 * Automatically determines context (Page, Post, Service, etc.)
 */
function mthan_render_global_sections($position = 'before') {
    $options = get_option('mthan_theme_options');
    if (!is_array($options)) {
        return;
    }

    $layouts = !empty($options['layouts_tabs']) ? $options['layouts_tabs'] : [];
    $key = '';
    
    // Determine context
    if (is_page()) {
        $key = ($position === 'before') ? 'page_before_content' : 'page_after_content';
    } elseif (is_singular('mthan_service')) {
        $key = ($position === 'before') ? 'service_before_content' : 'service_after_content';
    } elseif (is_singular('mthan_project')) {
        $key = ($position === 'before') ? 'project_before_content' : 'project_after_content';
    } elseif (function_exists('is_woocommerce') && (is_woocommerce() || is_cart() || is_checkout() || is_shop())) {
        $key = ($position === 'before') ? 'shop_before_content' : 'shop_after_content';
    } elseif (is_singular('post') || is_home() || is_archive() || is_search()) {
        $key = ($position === 'before') ? 'post_before_content' : 'post_after_content';
    }

    // Validate key and data in nested layouts array
    if (empty($key) || empty($layouts[$key]) || !is_array($layouts[$key])) {
        return;
    }

    // Render each selected section
    foreach ($layouts[$key] as $item) {
        $slug = !empty($item['template']) ? $item['template'] : (!empty($item['section']) ? $item['section'] : '');
        
        if (empty($slug)) {
            continue;
        }

        $func = 'mthan_section_' . $slug . '_html';
        if (function_exists($func)) {
             $func($item);
        }
    }
}
