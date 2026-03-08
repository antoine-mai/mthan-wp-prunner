<?php defined('ABSPATH') || exit;

/**
 * Services Section Options
 */
function mthan_section_Services_options() {
    $img_path = get_template_directory_uri() . '/assets/images/resource/';

    return array(
        array(
            'id'    => 'items',
            'type'  => 'group',
            'title' => 'Service Items',
            'default' => array(
                array(
                    'title'       => 'Spring Cleanup',
                    'icon'        => 'flaticon-hedge',
                    'image'       => $img_path . 'featured-image-9.jpg',
                    'description' => 'Indignation and dislike men who are so beguiled demoralized ...',
                ),
                array(
                    'title'       => 'Garden Care',
                    'icon'        => 'flaticon-wheelbarrow',
                    'image'       => $img_path . 'featured-image-10.jpg',
                    'description' => 'Frequently occur that pleasures have to berepudiated & accepted ...',
                ),
                array(
                    'title'       => 'Water Fountain',
                    'icon'        => 'flaticon-sprinkler',
                    'image'       => $img_path . 'featured-image-11.jpg',
                    'description' => 'Duty through weakness of will which is the same as saying through ...',
                ),
            ),
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'icon',
                    'type'  => 'upload',
                    'title' => 'Icon (Class or Image)',
                ),
                array(
                    'id'    => 'image',
                    'type'  => 'upload',
                    'title' => 'Image',
                    'help'  => 'Recommended size: 370x250px',
                ),
                array(
                    'id'    => 'description',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
                mthan_page_select_field('link', 'Link to Service'),
            ),
        ),
    );
}
