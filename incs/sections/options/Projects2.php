<?php defined('ABSPATH') || exit;

/**
 * Projects 2 Section Options (Fixed 7 Items for Masonry)
 */
function mthan_section_Projects2_options() {
    $gal_path = get_template_directory_uri() . '/assets/images/gallery/';
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
        // Explicit 7 Items for Masonry Layout
        array(
            'id'    => 'items',
            'type'  => 'group',
            'title' => 'Project Items (Exactly 7 recommended)',
            'max'   => 7,
            'default' => array(
                array( 'image' => $gal_path . '18.jpg', 'title' => 'Sprinkler Irrigation', 'category' => 'Lawn Care' ),
                array( 'image' => $gal_path . '19.jpg', 'title' => 'Garden Care', 'category' => 'Garden' ),
                array( 'image' => $gal_path . '20.jpg', 'title' => 'Plants Planting', 'category' => 'Landscaping' ),
                array( 'image' => $gal_path . '21.jpg', 'title' => 'Hard Scaping', 'category' => 'Gardening' ),
                array( 'image' => $gal_path . '22.jpg', 'title' => 'Spring Cleanup', 'category' => 'Lawn Care' ),
                array( 'image' => $gal_path . '24.jpg', 'title' => 'Water Fountain', 'category' => 'Garden' ),
                array( 'image' => $gal_path . '23.jpg', 'title' => 'Lawn Maintenance', 'category' => 'Lawn Care' ),
            ),
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Project Title',
                ),
                array(
                    'id'    => 'category',
                    'type'  => 'text',
                    'title' => 'Category Label',
                ),
                array(
                    'id'    => 'image',
                    'type'  => 'upload',
                    'title' => 'Image',
                ),
                mthan_page_select_field('link', 'Project Link'),
            ),
        ),
    );
}
