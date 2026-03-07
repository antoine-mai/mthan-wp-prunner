<?php defined('ABSPATH') || exit;

/**
 * Areas Section Options
 */
function mthan_section_Areas_options() {
    return array(
        array(
            'id'    => 'items',
            'type'  => 'group',
            'title' => 'Area Blocks',
            'default' => array(
                array(
                    'title'    => 'Commercial Area',
                    'subtitle' => 'Land local open spaces',
                    'icon'     => '', // Use upload now
                    'link'     => '',
                ),
                array(
                    'title'    => 'Residential Area',
                    'subtitle' => 'Land surrounding a home',
                    'icon'     => '',
                    'link'     => '',
                ),
                array(
                    'title'    => 'Public Area',
                    'subtitle' => 'Land open to the Public',
                    'icon'     => '',
                    'link'     => '',
                ),
            ),
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
                    'id'    => 'icon',
                    'type'  => 'upload',
                    'title' => 'Icon Image',
                ),
                mthan_page_select_field('link', 'Link'),
            ),
        ),
    );
}
