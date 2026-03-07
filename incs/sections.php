<?php defined('ABSPATH') || exit;

/**
 * Register available sections.
 * 
 * @return array Slugs and labels.
 */
function mthan_get_sections() {
    return [
        'Banners' => 'Banners',
        // Add more sections here...
    ];
}

/**
 * Collect all registered section fields with dependencies.
 */
function mthan_get_section_fields() {
    $sections = mthan_get_sections();
    $all_fields = array();

    foreach ($sections as $slug => $label) {
        $func = 'mthan_section_' . $slug . '_options';
        if (function_exists($func)) {
            $fields = $func();
            foreach ($fields as $field) {
                // Add dependency to each field
                $field['dependency'] = array('template', '==', $slug);
                
                // Prefix ID to avoid collisions (e.g. Banners_slides)
                if (isset($field['id'])) {
                    $field['id'] = $slug . '_' . $field['id'];
                }
                
                $all_fields[] = $field;
            }
        }
    }

    return $all_fields;
}
