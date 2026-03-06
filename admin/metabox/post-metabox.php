<?php defined('ABSPATH') or die('Cheatin\' uh?');

$prefix = 'mthan_post_options';

CSF::createMetabox($prefix, [
    'title'        => 'Post Options',
    'post_type'    => 'post',
    'show_restore' => true,
    'tabs'         => 'horizontal',
]);

// Layout tab
CSF::createSection($prefix, [
    'title'  => 'Layout',
    'icon'   => 'fas fa-columns',
    'fields' => [
        [
            'id'      => 'custom_header_layout',
            'type'    => 'select',
            'title'   => 'Header Style',
            'options' => [
                ''        => '— Use Default —',
                'style-1' => 'Style 1',
                'style-2' => 'Style 2',
            ],
        ],
        [
            'id'      => 'custom_footer_layout',
            'type'    => 'select',
            'title'   => 'Footer Style',
            'options' => [
                ''        => '— Use Default —',
                'style-1' => 'Style 1',
                'style-2' => 'Style 2',
            ],
        ],
        [
            'id'      => 'hide_mobile_bar',
            'type'    => 'switcher',
            'title'   => 'Hide Mobile Bar',
            'default' => false,
        ],
    ],
]);

// Post Banner
CSF::createSection($prefix, [
    'title'  => 'Page Banner',
    'icon'   => 'fas fa-image',
    'fields' => [
        [
            'id'    => 'page_banner_title',
            'type'  => 'text',
            'title' => 'Banner Title',
        ],
        [
            'id'      => 'page_banner_bg',
            'type'    => 'upload',
            'title'   => 'Background Image',
            'preview' => false,
        ],
    ],
]);