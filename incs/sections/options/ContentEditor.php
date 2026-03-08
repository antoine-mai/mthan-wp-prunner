<?php defined('ABSPATH') || exit;

/**
 * Content Editor Section Options
 */
function mthan_section_ContentEditor_options() {
    return array(
        array(
            'id'    => 'content',
            'type'  => 'wp_editor',
            'title' => 'Content',
            'help'  => 'Add custom content using the WordPress editor.',
        ),
        array(
            'id'    => 'extra_class',
            'type'  => 'text',
            'title' => 'Extra CSS Class',
        ),
    );
}
