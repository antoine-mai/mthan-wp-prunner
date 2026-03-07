<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Render the mvg-history section.
 *
 * @param array $section_data Per-instance CSF field values.
 **/

/**
 * Returns the CSF field definitions for the mvg-history section instance.
 * @return array
 */
function mthan_section_mvg_history_options()
{
    return array(
        array(
            'id'    => 'sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Lander',
        ),
        array(
            'id'     => 'mvg_blocks',
            'type'   => 'group',
            'title'  => 'MVG Blocks',
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
                    'id'    => 'letter',
                    'type'  => 'text',
                    'title' => 'Big Letter (e.g. M, V, G)',
                ),
                array(
                    'id'    => 'image',
                    'type'  => 'upload',
                    'preview' => false,
                    'title' => 'Background Image',
                ),
            ),
            'default' => array(
                array('title' => 'Our Mission', 'subtitle' => 'Pruners', 'letter' => 'M', 'image' => ''),
                array('title' => 'Our Vision', 'subtitle' => 'Pruners', 'letter' => 'V', 'image' => ''),
                array('title' => 'Our Goals', 'subtitle' => 'Pruners', 'letter' => 'G', 'image' => ''),
            ),
        ),
        array(
            'id'     => 'desc_carousel',
            'type'   => 'group',
            'title'  => 'Description Carousel',
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
                array(
                    'id'    => 'icon',
                    'type' => 'upload',
                    'preview' => false,
                    'title' => 'Icon Image',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'link',
                    'title' => 'Read More Link',
                ),
            ),
        ),
        array(
            'id'     => 'history_repeater',
            'type'   => 'group',
            'title'  => 'History Timeline',
            'fields' => array(
                array(
                    'id'    => 'year',
                    'type'  => 'text',
                    'title' => 'Year',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
            ),
        ),
        mthan_btn_text_field('View Full History'),
        mthan_btn_link_field(''),
    );
}
