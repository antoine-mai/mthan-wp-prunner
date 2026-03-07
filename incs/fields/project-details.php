<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the project-details section instance.
 * @return array
 */
function mthan_section_project_details_options()
{
    return array(
        array(
            'id'    => 'project_image',
            'type'  => 'media',
            'title' => 'Main Project Image',
            'library' => 'image',
        ),
        array(
            'id'    => 'project_title',
            'type'  => 'textarea',
            'title' => 'Heading',
            'default' => 'Here to Know <br>About Our Project',
        ),
        array(
            'id'    => 'project_content',
            'type'  => 'wp_editor',
            'title' => 'Project Description',
            'default' => '<p>Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain trouble that are bound Demoralized by the charms of pleasure of the moment so blinded desire our power of choice is untrammelled has when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and and owing to the claims of duty or the obligations.</p><p>Foresee the pain trouble that are bound demoralized by the charms of pleasure the moment blinded desire our power of choice is untrammelled and when nothing prevents.</p>',
        ),
        array(
            'id'     => 'project_info',
            'type'   => 'repeater',
            'title'  => 'Project Info Blocks',
            'fields' => array(
                array(
                    'id'    => 'icon',
                    'type'  => 'text',
                    'title' => 'Icon Class',
                ),
                array(
                    'id'    => 'label',
                    'type'  => 'text',
                    'title' => 'Label',
                ),
                array(
                    'id'    => 'value',
                    'type'  => 'textarea',
                    'title' => 'Value',
                ),
            ),
            'default' => array(
                array('icon' => 'flaticon-marketing', 'label' => 'Client', 'value' => 'Shwan <br>Communities'),
                array('icon' => 'flaticon-location-1', 'label' => 'Location', 'value' => 'Newyork <br>United States'),
                array('icon' => 'flaticon-trees', 'label' => 'Services', 'value' => 'Landscape <br>Design'),
                array('icon' => 'flaticon-home-2', 'label' => 'Property', 'value' => 'Luxury <br>Apartment'),
                array('icon' => 'flaticon-calendar-1', 'label' => 'Date', 'value' => '14 Feb to <br>26 Feb, 2020'),
                array('icon' => 'flaticon-sticker', 'label' => 'Price', 'value' => '8500 <br>US Dollar'),
            ),
        ),
    );
}
