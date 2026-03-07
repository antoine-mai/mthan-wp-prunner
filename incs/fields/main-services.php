<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the services section instance.
 * @return array
 */
function mthan_section_main_services_options()
{
    return array(
        mthan_subtitle_field('Our Services'),
        array(
            'id' => 'services_subtitle_icon',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Subtitle Icon',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/icons/leaf-center.png')
        ),
        mthan_title_field('What We Offer'),
        array(
            'id' => 'main_services_list',
            'type' => 'group',
            'title' => 'Services List',
            'fields' => array(
                    mthan_name_field(),
                    array(
                    'id' => 'services_image',
                    'type' => 'upload',
                    'preview' => false,
                    'title' => 'Image',
                ),
                    mthan_icon_field(),
                    array(
                    'id' => 'services_text',
                    'type' => 'textarea',
                    'title' => 'Description',
                ),
                mthan_page_select_field('services_link', 'Link to Page'),
            ),
            'default' => array(
                    array(
                    'name' => 'Spring Cleanup',
                    'services_text' => 'Indignation and dislike men who are so beguiled demoralized ...',
                    'icon' => 'flaticon-hedge',
                ),
                    array(
                    'name' => 'Garden Care',
                    'services_text' => 'Frequently occur that pleasures have to berepudiated & accepted ...',
                    'icon' => 'flaticon-wheelbarrow',
                ),
                    array(
                    'name' => 'Water Fountain',
                    'services_text' => 'Duty through weakness of will which is the same as saying through ...',
                    'icon' => 'flaticon-sprinkler',
                ),
            ),
        ),
    );
}
