<?php defined('ABSPATH') || exit;

/**
 * Contact 1 Section Options
 */
function mthan_section_Contact1_options() {
    $img_path = get_template_directory_uri() . '/assets/images/resource/';
    $icon_path = get_template_directory_uri() . '/assets/images/icons/';

    return array(
        array(
            'id'    => 'title_icon',
            'type'  => 'upload',
            'title' => 'Title Icon',
            'default' => $icon_path . 'leaf-two.png',
        ),
        array(
            'id'    => 'subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Get In Touch',
        ),
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Request for Free Quote',
        ),
        array(
            'id'    => 'sub_text',
            'type'  => 'textarea',
            'title' => 'Sub Text',
            'default' => 'Get free estimates from Pruners lawn care and gardening professionals in your city.',
        ),
        array(
            'id'    => 'discount',
            'type'  => 'text',
            'title' => 'Discount Text',
            'default' => 'Save up to 40%',
        ),
        array(
            'id'    => 'cf7_shortcode',
            'type'  => 'text',
            'title' => 'Contact Form 7 Shortcode',
        ),
        array(
            'id'    => 'side_image',
            'type'  => 'upload',
            'title' => 'Side Image',
            'default' => $img_path . 'anim-image-2.png',
        ),
    );
}
