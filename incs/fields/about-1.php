<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the about-1 section instance.
 * @return array
 */
function mthan_section_about_1_options() {
    $slug = 'about-1';

    return [
        [
            'title'   => 'Section Subtitle',
            'id'      => $slug . '_subtitle',
            'default' => 'About Us',
            'type'    => 'text',
        ],
        [
            'default' => 'Professional Gardener',
            'title'   => 'Section Title',
            'id'      => $slug . '_title',
            'type'    => 'text',
        ],
        [
            'default' => get_template_directory_uri() . '/assets/images/icons/leaf-two.png',
            'title'   => 'Subtitle Icon',
            'id'      => $slug . '_subtitle_icon',
            'type'    => 'upload',
            'preview' => false,
        ],
        [
            'default' => '<p class="bigger-text">Leader in landscaping, lawn care, and irrigation services in Los Angeles since 2004.</p><p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and we will give you a complete account of the system, and expound the actualy teachings.</p>',
            'id'      => $slug . '_about_content',
            'type'    => 'wp_editor',
            'title'   => 'Content',
        ],
        [
            'default'    => 'Our Company has established a reputation as the leader in landscape design.',
            'id'         => $slug . '_quote_text',
            'title'      => 'Quote Text',
            'type'       => 'textarea',
        ],
        [
            'id'         => $slug . '_quote_author',
            'type'       => 'text',
            'title'      => 'Quote Author',
            'default'    => 'Chris Stanley,',
        ],
        [
            'id'         => $slug . '_quote_designation',
            'type'       => 'text',
            'title'      => 'Quote Designation',
            'default'    => 'Founder of Pruners',
        ],
        [
            'id'         => $slug . '_signature_image',
            'type'       => 'upload',
            'preview'    => false,
            'title'      => 'Signature Image',
        ],
        [
            'id'    => $slug . '_image',
            'type'  => 'upload',
            'preview' => false,
            'title' => 'Main Image',
            'default' => get_template_directory_uri() . '/assets/images/resource/featured-image-1.jpg',
        ],
        [
            'id'    => $slug . '_anim_image',
            'type'  => 'upload',
            'preview' => false,
            'title' => 'Animated Image (Small)',
            'default' => get_template_directory_uri() . '/assets/images/resource/anim-image-1.png',
        ],
        [
            'id'    => $slug . '_video_url',
            'type'  => 'text',
            'title' => 'Video URL',
        ],
        [
            'id'      => $slug . '_quote_thumb',
            'type'    => 'upload',
            'preview' => false,
            'title'   => 'Video Thumbnail Image',
            'default' => get_template_directory_uri() . '/assets/images/resource/quote-thumb.jpg',
        ],
        mthan_btn_text_field('Read More', 'Button Text', $slug . '_btn_text'),
        mthan_btn_link_field('#', 'Button Link', $slug . '_btn_link'),
        [
            'id'      => $slug . '_exp_count',
            'type'    => 'text',
            'title'   => 'Experience Years (Number)',
            'default' => '25',
        ],
        [
            'id'      => $slug . '_exp_text',
            'type'    => 'textarea',
            'title'   => 'Experience Text',
            'default' => 'Years of <br>Experience',
        ],
        [
            'id'      => $slug . '_exp_icon',
            'type'    => 'text',
            'title'   => 'Experience Icon Class',
            'default' => 'flaticon-leaves',
        ],
    ];
}