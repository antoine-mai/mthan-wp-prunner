<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the about section instance.
 * @return array
 */
function mthan_section_about_options()
{
    return [
        [
            'id' => 'section_style',
            'type' => 'select',
            'title' => 'Section Style',
            'options' => [
                '1' => 'Style 1 (Standard)',
                '2' => 'Style 2 (Insurance)',
                '3' => 'Style 3 (Experience)',
            ],
            'default' => '1',
        ],
        mthan_subtitle_field('About Us'),
        mthan_title_field('Professional Gardener'),
        [
            'id' => 'text',
            'type' => 'textarea',
            'title' => 'Description Paragraph 1',
            'default' => 'Leader in landscaping, lawn care, and irrigation services in Los Angeles since 2004.',
        ],
        [
            'id' => 'text_2',
            'type' => 'textarea',
            'title' => 'Description Paragraph 2',
            'default' => 'Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actualy teachings.',
        ],
        mthan_btn_text_field('Read More'),
        mthan_btn_link_field('about.html'),
        [
            'id' => 'about_video_link',
            'type' => 'text',
            'title' => 'Video Link',
            'default' => 'https://www.youtube.com/watch?v=CB_rXABU8DI',
        ],

        [
            'id' => 'about_subtitle_icon',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Subtitle Icon',
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/icons/leaf-two.png'
            ],
        ],

        // Shared Image/Media fields
        [
            'id' => 'about_featured_image',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Featured Image',
            'dependency' => ['section_style', 'any', '1,3'],
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/resource/featured-image-1.jpg'
            ],
        ],
        [
            'id' => 'about_anim_image',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Animated Image',
            'dependency' => ['section_style', 'any', '1,2'],
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/resource/anim-image-1.png'
            ],
        ],
        [
            'id' => 'about_vid_thumb',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Video Thumbnail',
            'dependency' => ['section_style', 'any', '2,3'],
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/resource/vid-thumb-1.jpg'
            ],
        ],
        [
            'id' => 'about_video_icon',
            'type' => 'icon',
            'title' => 'Video Play Icon',
            'default' => 'flaticon-play-button-1',
        ],
        [
            'id' => 'about_signature',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Signature Image',
            'dependency' => ['section_style', 'any', '1,3'],
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/resource/signature-1.png'
            ],
        ],

        // Shared Quote fields
        [
            'id' => 'about_quote_text',
            'type' => 'textarea',
            'title' => 'Quote Text',
            'default' => '“Our Company has established a reputation as the leader in landscape design.”',
            'dependency' => ['section_style', 'any', '1,3'],
        ],
        [
            'id' => 'about_quote_name',
            'type' => 'text',
            'title' => 'Quote Name',
            'default' => 'Chris Stanley,',
            'dependency' => ['section_style', 'any', '1,3'],
        ],
        [
            'id' => 'about_quote_designation',
            'type' => 'text',
            'title' => 'Quote Designation',
            'default' => 'Founder of Pruners',
            'dependency' => ['section_style', 'any', '1,3'],
        ],
        [
            'id' => 'about_quote_thumb',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Quote Thumbnail',
            'dependency' => ['section_style', '==', '1'],
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/resource/quote-thumb.jpg'
            ],
        ],

        // Shared Certification fields
        [
            'id' => 'about_cert_title',
            'type' => 'text',
            'title' => 'Certificate Title',
            'default' => 'Certified Company',
            'dependency' => ['section_style', 'any', '2,3'],
        ],
        [
            'id' => 'about_cert_number',
            'type' => 'text',
            'title' => 'Certificate Number',
            'default' => 'ISO 9001:2015',
            'dependency' => ['section_style', 'any', '2,3'],
        ],
        [
            'id' => 'about_iso_icon',
            'type' => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'ISO/Cert Icon',
            'dependency' => ['section_style', 'any', '2,3'],
            'default' => [
                'url' => get_template_directory_uri() . '/assets/images/icons/iso-icon.png'
            ],
        ],

        // Style 1 specific
        [
            'id' => 'about_projects_count',
            'type' => 'text',
            'title' => 'Projects Count',
            'default' => '2k',
            'dependency' => ['section_style', '==', '1'],
        ],
        [
            'id' => 'about_projects_text',
            'type' => 'text',
            'title' => 'Projects Text',
            'default' => 'Projects <br>were completed',
            'dependency' => ['section_style', '==', '1'],
        ],
        [
            'id' => 'about_projects_icon',
            'type' => 'icon',
            'title' => 'Projects Icon',
            'default' => 'flaticon-leaves',
            'dependency' => ['section_style', '==', '1'],
        ],

        // Style 2 specific
        [
            'id' => 'about_insured_title',
            'type' => 'text',
            'title' => 'Insured Title',
            'default' => 'Fully Insured',
            'dependency' => ['section_style', '==', '2'],
        ],
        [
            'id' => 'about_insured_text',
            'type' => 'textarea',
            'title' => 'Insured Text',
            'default' => 'Indignation and dislike men who are so that our garden therefore always holds in these matters too this stone has beguiled and occur demoralized.',
            'dependency' => ['section_style', '==', '2'],
        ],
        [
            'id' => 'about_insured_icon',
            'type' => 'icon',
            'title' => 'Insured Icon',
            'default' => 'flaticon-insurance',
            'dependency' => ['section_style', '==', '2'],
        ],

        // Style 3 specific
        [
            'id' => 'about_exp_years',
            'type' => 'text',
            'title' => 'Experience Years',
            'default' => '16',
            'dependency' => ['section_style', '==', '3'],
        ],
        [
            'id' => 'about_exp_text',
            'type' => 'text',
            'title' => 'Experience Text',
            'default' => 'Years <br>of Experience',
            'dependency' => ['section_style', '==', '3'],
        ],
    ];
}
