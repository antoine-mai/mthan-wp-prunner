<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the error section instance.
 * @return array
 */
function mthan_section_error_options()
{
    return array(
        array(
            'id'      => 'error_bg',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Background Image',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/background/bg-404.jpg')
        ),
        array(
            'id'      => 'error_title_img',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Error Image (e.g. 404)',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/resource/404-image.png')
        ),
        array(
            'id'    => 'error_heading',
            'type'  => 'text',
            'title' => 'Heading',
            'default' => 'Oops! Page Not Found.',
        ),
        array(
            'id'    => 'error_text',
            'type'  => 'textarea',
            'title' => 'Description',
            'default' => 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
        ),
        mthan_btn_text_field('Back to Home'),
        mthan_btn_link_field(''),
    );
}
