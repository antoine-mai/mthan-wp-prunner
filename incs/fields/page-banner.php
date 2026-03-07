<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the page-banner section instance.
 * @return array
 */
function mthan_section_page_banner_options()
{
    return array(
        array(
            'id'      => 'page_banner_image',
            'type'    => 'media',
            'library' => 'image',
            'title'   => 'Background Image',
        ),
        array(
            'id'    => 'page_banner_title',
            'type'  => 'text',
            'title' => 'Page Title (H1)',
        ),
        array(
            'id'    => 'page_banner_breadcrumb_title',
            'type'  => 'text',
            'title' => 'Breadcrumb Title',
            'desc'  => 'Leave empty to use the Page Title',
        ),
    );
}
