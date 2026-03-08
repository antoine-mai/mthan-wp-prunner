<?php defined('ABSPATH') || exit;

/**
 * Projects 2 Section Options (Fixed 7 Items for Masonry)
 */
function mthan_section_Projects2_options() {
    $gal_path = get_template_directory_uri() . '/assets/images/gallery/';
    $icon_path = get_template_directory_uri() . '/assets/images/icons/';

    $options = array(
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
            'id'    => 'btn_text',
            'type'  => 'text',
            'title' => 'Button Text',
            'default' => 'View More',
        ),
        mthan_page_select_field('btn_link', 'Button Link', [
            'default' => [
                'url' => '#'
            ]
        ]),
    );

    $options[] = array(
        'id'      => 'count',
        'type'    => 'number',
        'title'   => 'Project Count',
        'default' => 7,
        'help'    => 'This layout is best designed for 7 items.',
    );

    return $options;
}
