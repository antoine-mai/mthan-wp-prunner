<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the why-us section instance.
 * @return array
 */
function mthan_section_why_us_options()
{
    return array(
        array(
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => array(
                '1' => 'Style 1 (Grid)',
                '2' => 'Style 2 (Split)',
                '3' => 'Style 3 (Flap)',
            ),
            'default' => '1',
        ),
        mthan_subtitle_field('why choose us'),
        array(
            'id'    => 'sec_subtitle_icon',
            'type'  => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Subtitle Icon',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/icons/leaf-four.png')
        ),
        mthan_title_field('The Number One Choice For Landscaping'),
        array(
            'id'    => 'header_text',
            'type'  => 'textarea',
            'title' => 'Header Description',
            'default' => 'How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.',
            'dependency' => array('section_style', 'any', '1,3'),
        ),
        // Style 2 specific fields
        array(
            'id'    => 'left_bg_image',
            'type'  => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Left Column BG Image',
            'dependency' => array('section_style', '==', '2'),
            'default' => array('url' => get_template_directory_uri() . '/assets/images/background/why-us-bg.jpg')
        ),
        array(
            'id'    => 'rating_value',
            'type'  => 'text',
            'title' => 'Rating Value',
            'default' => '4.9',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'rating_text',
            'type'  => 'text',
            'title' => 'Rating Text',
            'default' => 'Customer Rating',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'floated_text',
            'type'  => 'text',
            'title' => 'Floated Text',
            'default' => 'Since 2008',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'content_text',
            'type'  => 'textarea',
            'title' => 'Content Text',
            'default' => 'It is a long established fact that a reader will distracted by the readable content.',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'list_items',
            'type'  => 'textarea',
            'title' => 'List Items (one per line)',
            'default' => "Clean, Branded Vehicles\nProfessional, Uniformed Personnel\nTimely Response Guarantee\nReliable Equipment Maintained Daily",
            'dependency' => array('section_style', '==', '2'),
        ),
        array_merge(mthan_btn_text_field('How We Work'), ['dependency' => array('section_style', '==', '2')]),
        array_merge(mthan_btn_link_field('#'), ['dependency' => array('section_style', '==', '2')]),
        // Repeater for blocks
        array(
            'id'     => 'why_repeater',
            'type'   => 'group',
            'title'  => 'Why Us Blocks',
            'max'    => 8,
            'fields' => array(
                mthan_name_field(),
                mthan_icon_field(),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Link URL',
                ),
            ),
            'default' => array(
                array(
                    'name' => 'Experienced',
                    'icon' => 'flaticon-null',
                    'text' => 'Indignation and dislike mens who are so beguiled & the demoralized.',
                    'link' => '#'
                ),
                array(
                    'name' => 'Upfront Pricing',
                    'icon' => 'flaticon-insurance',
                    'text' => 'Take trivial example which of ever undertakes laborious physical exercise.',
                    'link' => '#'
                ),
                array(
                    'name' => 'Fully Insured',
                    'icon' => 'flaticon-offer',
                    'text' => 'Readable content page when looking at its layout making look like readable.',
                    'link' => '#'
                ),
                array(
                    'name' => 'Quality Products',
                    'icon' => 'flaticon-shovel',
                    'text' => 'How all this mistaken idea of denouncing pleasure and praising complete.',
                    'link' => '#'
                ),
                array(
                    'name' => 'Pet & Kid Safe',
                    'icon' => 'flaticon-dog-2',
                    'text' => 'How all this mistaken idea of denouncing pleasure and praising complete.',
                    'link' => '#'
                ),
                array(
                    'name' => 'Expert Staff',
                    'icon' => 'flaticon-gardener-1',
                    'text' => 'Take trivial example which of ever undertakes laborious physical exercise.',
                    'link' => '#'
                ),
                array(
                    'name' => '100% Guarantee',
                    'icon' => 'flaticon-medal-1',
                    'text' => 'Indignation and dislike mens who are so beguiled & the demoralized.',
                    'link' => '#'
                ),
                array(
                    'name' => 'Ontime Delivery',
                    'icon' => 'flaticon-on-time',
                    'text' => 'Readable content page when looking at its layout making look like readable.',
                    'link' => '#'
                ),
            )
        ),
    );
}
