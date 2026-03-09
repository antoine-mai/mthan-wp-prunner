<?php defined('ABSPATH') || exit;

/**
 * Register available widgets.
 */
function mthan_get_widgets() {
    return [
        'Search'         => 'Search',
        'Categories'     => 'Categories',
        'RecentPosts'    => 'Recent Posts',
        'Tags'           => 'Tags',
        'CTA'            => 'Call To Action',
        'ServiceList'    => 'Service List',
        'Downloads'      => 'Download Materials',
    ];
}

/**
 * Collect all registered widget fields with dependencies.
 */
function mthan_get_widget_fields() {
    $widgets = mthan_get_widgets();
    $all_fields = array();

    foreach ($widgets as $slug => $label) {
        $func = 'mthan_widget_' . $slug . '_options';
        if (function_exists($func)) {
            $fields = $func();
            foreach ($fields as $field) {
                // Add dependency to each field
                $field['dependency'] = array('type', '==', $slug);
                
                // Prefix ID to avoid collisions
                if (isset($field['id'])) {
                    $field['id'] = $slug . '_' . $field['id'];
                }
                
                $all_fields[] = $field;
            }
        }
    }

    return $all_fields;
}

/**
 * Get a value for a specific widget field.
 */
function mthan_get_widget_val($slug, $data, $key, $default = '') {
    $field_id = $slug . '_' . $key;
    if (isset($data[$field_id]) && $data[$field_id] !== '' && $data[$field_id] !== array()) {
        return $data[$field_id];
    }
    return $default;
}

/**
 * Render widgets from a specific sidebar ID.
 */
function mthan_render_sidebar($sidebar_id) {
    if (empty($sidebar_id)) return;

    $options = get_option(MTHAN_THEME_OPTIONS);
    $dynamic_sidebars = !empty($options['dynamic_sidebars']) ? $options['dynamic_sidebars'] : array();

    $found_sidebar = null;
    foreach ($dynamic_sidebars as $sidebar) {
        if (!empty($sidebar['id']) && $sidebar['id'] === $sidebar_id) {
            $found_sidebar = $sidebar;
            break;
        }
    }

    if (!$found_sidebar || empty($found_sidebar['widgets'])) {
        // Fallback to dynamic_sidebar if it was registered conventionally
        dynamic_sidebar($sidebar_id);
        return;
    }

    foreach ($found_sidebar['widgets'] as $widget) {
        mthan_render_widget($widget);
    }
}

/**
 * Render a single widget based on its type.
 */
function mthan_render_widget($widget_data) {
    $type = !empty($widget_data['type']) ? $widget_data['type'] : '';
    if (empty($type)) {
        return;
    }

    $func = 'mthan_widget_' . $type . '_output';
    if (function_exists($func)) {
        $func($widget_data);
    }
}
