<?php defined('ABSPATH') || exit;

/**
 * Banners Section Options
 */
function mthan_section_Banners_options() {
    return array(
        array(
            'id'    => 'slides',
            'type'  => 'group',
            'title' => 'Slides',
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'subtitle',
                    'type'  => 'text',
                    'title' => 'Subtitle',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
                array(
                    'id'    => 'image',
                    'type'  => 'upload',
                    'title' => 'Background Image',
                ),
                array(
                    'id'    => 'btn1_text',
                    'type'  => 'text',
                    'title' => 'Button 1 Text',
                ),
                array(
                    'id'    => 'btn1_link',
                    'type'  => 'text',
                    'title' => 'Button 1 Link',
                ),
                array(
                    'id'    => 'btn2_text',
                    'type'  => 'text',
                    'title' => 'Button 2 Text',
                ),
                array(
                    'id'    => 'btn2_link',
                    'type'  => 'text',
                    'title' => 'Button 2 Link',
                ),
            ),
        ),
    );
}
