<?php defined('ABSPATH') || exit;

/**
 * Why Us 3 Section Options
 */
function mthan_section_WhyUs3_options() {
    $img_path = get_template_directory_uri() . '/assets/images/resource/';
    $icon_path = get_template_directory_uri() . '/assets/images/icons/';

    return array(
        array(
            'id'    => 'title_icon',
            'type'  => 'upload',
            'title' => 'Title Icon',
            'default' => $icon_path . 'leaf-eight.png',
        ),
        array(
            'id'    => 'subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Why Choose Us',
        ),
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Reason For Choose Us',
        ),
        array(
            'id'    => 'description',
            'type'  => 'textarea',
            'title' => 'Title Description',
            'default' => 'How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.',
        ),
        array(
            'id'    => 'items',
            'type'  => 'group',
            'title' => 'Why Choose Us Items',
            'default' => array(
                array(
                    'title' => 'Experienced',
                    'icon'  => 'flaticon-null',
                    'text'  => 'Indignation dislike worked who that our therefore holds.',
                ),
                array(
                    'title' => 'Fully Insured',
                    'icon'  => 'flaticon-insurance',
                    'text'  => 'How all this mistakens idea our pleasure & praising.',
                ),
                array(
                    'title' => '100% Guarantee',
                    'icon'  => 'flaticon-medal-1',
                    'text'  => 'Take trivial example which of us ever undertakes rights.',
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
                    'type'  => 'text',
                    'title' => 'Icon Class',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
            ),
        ),
    );
}
