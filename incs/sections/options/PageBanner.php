<?php defined('ABSPATH') || exit;

/**
 * Page Banner Section Options
 */
function mthan_section_PageBanner_options() {
    $img_path = get_template_directory_uri() . '/assets/images/background/';

    return array(
        array(
            'id'    => 'bg_image',
            'type'  => 'upload',
            'title' => 'Background Image',
            'default' => $img_path . 'banner-image-1.jpg',
        ),
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Page Title',
            'help'    => 'If left empty, will use the current page title.',
        ),
        array(
            'id'    => 'home_text',
            'type'  => 'text',
            'title' => 'Home Breadcrumb Text',
            'default' => '',
            'help'    => 'Leave empty to only show the home icon.',
        ),
        array(
            'id'    => 'breadcrumb_title',
            'type'  => 'text',
            'title' => 'Breadcrumb Current Title',
            'help'    => 'If left empty, will use the Page Title field above.',
        ),
    );
}
