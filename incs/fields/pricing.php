<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the pricing section instance.
 * @return array
 */
function mthan_section_pricing_options()
{
    return array(
            array(
            'id' => 'sec_subtitle',
            'type' => 'text',
            'title' => 'Subtitle',
            'default' => 'Our Solutions',
        ),
            array(
            'id' => 'sec_title',
            'type' => 'text',
            'title' => 'Title',
            'default' => 'Pricing Plans',
        ),
            array(
            'id' => 'sec_text',
            'type' => 'textarea',
            'title' => 'Description',
            'default' => 'How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.',
        ),
            array(
            'id' => 'pricing_repeater',
            'type' => 'group',
            'title' => 'Pricing Plans',
            'fields' => array(
                    array(
                    'id' => 'currency',
                    'type' => 'text',
                    'title' => 'Currency Symbol',
                    'default' => '$',
                ),
                    array(
                    'id' => 'price',
                    'type' => 'text',
                    'title' => 'Price',
                ),
                    array(
                    'id' => 'title',
                    'type' => 'text',
                    'title' => 'Title',
                ),
                    array(
                    'id' => 'frequency',
                    'type' => 'text',
                    'title' => 'Frequency',
                    'default' => 'Price Per Month',
                ),
                    array(
                    'id' => 'features',
                    'type' => 'group',
                    'title' => 'Features',
                    'fields' => array(
                            array(
                            'id' => 'label',
                            'type' => 'text',
                            'title' => 'Feature Label',
                        ),
                            array(
                            'id' => 'active',
                            'type' => 'switcher',
                            'title' => 'Active?',
                            'default' => true,
                        ),
                    ),
                ),
                    array(
                    'id' => 'link',
                    'type' => 'text',
                    'title' => 'Link',
                    'default' => '#',
                ),
            ),
        ),
    );
}
