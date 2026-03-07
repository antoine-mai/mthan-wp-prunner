<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the about section instance.
 * @return array
 */
function mthan_section_about_options()
{
    return [
        [
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => [
                '1' => 'Style 1 (Signature)',
                '2' => 'Style 2 (ISO/Video)',
                '3' => 'Style 3',
            ],
            'default' => '1',
        ],
        mthan_subtitle_field('About Us'),
        [
            'id'      => 'subtitle_icon',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Subtitle Icon',
            'default' => ['url' => get_template_directory_uri() . '/assets/images/icons/leaf-two.png']
        ],
        mthan_title_field('Professional Gardener'),
        [
            'id'      => 'content',
            'type'    => 'wp_editor',
            'title'   => 'Content',
            'default' => '<p class="bigger-text">Leader in landscaping, lawn care, and irrigation services in Los Angeles since 2004.</p><p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actualy teachings.</p>',
        ],
        // Style 1 Specifics
        [
            'id'         => 'quote_text',
            'type'       => 'textarea',
            'title'      => 'Quote Text',
            'default'    => 'Our Company has established a reputation as the leader in landscape design.',
            'dependency' => ['section_style', '==', '1'],
        ],
        [
            'id'         => 'quote_author',
            'type'       => 'text',
            'title'      => 'Quote Author',
            'default'    => 'Chris Stanley,',
            'dependency' => ['section_style', '==', '1'],
        ],
        [
            'id'         => 'quote_designation',
            'type'       => 'text',
            'title'      => 'Quote Designation',
            'default'    => 'Founder of Pruners',
            'dependency' => ['section_style', '==', '1'],
        ],
        [
            'id'         => 'signature_image',
            'type'       => 'media',
            'title'      => 'Signature Image',
            'dependency' => ['section_style', '==', '1'],
        ],
        // Style 2 Specifics
        [
            'id'         => 'insured_title',
            'type'       => 'text',
            'title'      => 'Insured Title',
            'default'    => 'Fully Insured',
            'dependency' => ['section_style', '==', '2'],
        ],
        [
            'id'         => 'insured_text',
            'type'       => 'textarea',
            'title'      => 'Insured Text',
            'default'    => 'Indignation and dislike men who are so that our garden therefore always holds in these matters too this stone has beguiled and occur demoralized.',
            'dependency' => ['section_style', '==', '2'],
        ],
        [
            'id'         => 'iso_number',
            'type'       => 'text',
            'title'      => 'ISO Number',
            'default'    => 'ISO 9001:2015',
            'dependency' => ['section_style', '==', '2'],
        ],
        // Common
        [
            'id'    => 'image',
            'type'  => 'media',
            'title' => 'Main Image',
        ],
        [
            'id'    => 'video_url',
            'type'  => 'text',
            'title' => 'Video URL',
        ],
        mthan_btn_text_field('Read More'),
        mthan_btn_link_field('#'),
    ];
}