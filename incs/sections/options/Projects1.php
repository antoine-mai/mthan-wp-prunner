<?php defined('ABSPATH') || exit;

/**
 * Projects 1 Section Options
 */
function mthan_section_Projects1_options() {
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
            'default' => 'Our Projects',
        ),
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Latest From Projects',
        ),
        array(
            'id'      => 'count',
            'type'    => 'number',
            'title'   => 'Project Count',
            'default' => 6,
        ),
        array(
            'id'    => 'lower_text',
            'type'  => 'textarea',
            'title' => 'Lower Text',
            'default' => 'We give guarantee for healthy landscapes, You should never compromise with quality.',
        ),
        array(
            'id'    => 'btn_text',
            'type'  => 'text',
            'title' => 'Button Text',
            'default' => 'View All Projects',
        ),
        mthan_page_select_field('btn_link', 'Button Link', [
            'default' => [
                'url' => '#'
            ]
        ]),
    );
}
