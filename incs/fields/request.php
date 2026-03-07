<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the request section instance.
 * @return array
 */
function mthan_section_request_options()
{
    return array(
        array(
            'id'    => 'sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Request a Quote',
        ),
        array(
            'id'    => 'sec_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Free Estimates',
        ),
        array(
            'id'    => 'sec_sub_text',
            'type'  => 'textarea',
            'title' => 'Sub Text',
            'default' => 'Get free estimates from lander lawn care and gardening professionals in your city.',
        ),
        array(
            'id'    => 'right_image',
            'type'  => 'upload',
                    'preview' => false,
            'title' => 'Right Side Image',
        ),
        array(
            'id'    => 'discount_text',
            'type'  => 'text',
            'title' => 'Discount Label',
            'default' => 'Save up to 40%',
        ),
        array(
            'id'    => 'services_list',
            'type'  => 'textarea',
            'title' => 'Services (one per line)',
            'default' => "Spring Cleanup\nPlants Planting\nWater Fountain\nHard Scaping\nGarden Care",
        ),
    );
}
