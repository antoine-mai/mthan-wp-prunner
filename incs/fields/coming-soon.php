<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the coming-soon section instance.
 * @return array
 */
function mthan_section_coming_soon_options()
{
    return array(
        array(
            'id'      => 'cs_bg',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Background Image',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/background/bg-coming-soon.jpg')
        ),
        array(
            'id'      => 'cs_logo',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Logo',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/white-logo.png')
        ),
        array(
            'id'    => 'cs_big_text',
            'type'  => 'text',
            'title' => 'Big Text',
            'default' => 'We introduce something awesome in our work!.',
        ),
        array(
            'id'    => 'cs_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Coming Soon',
        ),
        array(
            'id'    => 'cs_date',
            'type'  => 'text',
            'title' => 'Launch Date (YYYY/MM/DD)',
            'default' => '2026/12/31',
        ),
        array(
            'id'    => 'cs_form_action',
            'type'  => 'text',
            'title' => 'Form Action Link',
            'default' => '#',
        ),
    );
}
