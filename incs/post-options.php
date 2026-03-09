<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Post Options — Definining the layout of a single post.
 */

$sidebar_options = mthan_get_sidebar_options();

CSF::createMetabox(MTHAN_POST_OPTIONS, [
    'title'        => 'Post Options',
    'post_type'    => 'post',
    'show_restore' => true,
    'tabs'         => 'horizontal',
    'context'      => 'normal',
    'priority'     => 'high',
]);

// ── Sections Data ───────────────────────────────────────────────────
$available_sections = array_merge(['' => '— Select Template —'], mthan_get_sections('post'));
$section_fields     = mthan_get_section_fields('post');

// ── Helper to create section group ──
$mthan_gen_section_group = function($id) use ($available_sections, $section_fields) {
    return [
        [
            'id'                     => $id,
            'type'                   => 'group',
            'button_title'           => 'Add Section',
            'accordion_title_auto'   => true,
            'accordion_title_prefix' => 'Section: ',
            'accordion_title_number' => true,
            'fields'                 => array_merge(
                [
                    [
                        'id'    => 'template',
                        'type'  => 'select',
                        'title' => 'Select Template',
                        'options' => $available_sections,
                    ],
                ],
                $section_fields
            ),
        ],
    ];
};

// ── Before Content Sections ────────────────────────────────────────
CSF::createSection(MTHAN_POST_OPTIONS, [
    'title'  => 'Before Content',
    'icon'   => 'fas fa-arrow-up',
    'fields' => $mthan_gen_section_group('post_before_sections'),
]);

// ── After Content Sections ─────────────────────────────────────────
CSF::createSection(MTHAN_POST_OPTIONS, [
    'title'  => 'After Content',
    'icon'   => 'fas fa-arrow-down',
    'fields' => $mthan_gen_section_group('post_after_sections'),
]);

// ── Settings ──────────────────────────────────────────────────────
CSF::createSection(MTHAN_POST_OPTIONS, [
    'title'  => 'Settings',
    'icon'   => 'fas fa-cogs',
    'fields' => [
        [
            'id'    => 'post_sidebar_enable',
            'type'  => 'switcher',
            'title' => 'Enable Sidebar',
            'default' => true,
        ],
        [
            'id'      => 'post_sidebar_position',
            'type'    => 'radio',
            'title'   => 'Sidebar Position',
            'options' => array(
                'left'  => 'Left',
                'right' => 'Right',
            ),
            'default'    => 'right',
            'dependency' => array('post_sidebar_enable', '==', true),
        ],
        [
            'id'      => 'post_sidebar_select',
            'type'    => 'select',
            'title'   => 'Select Sidebar',
            'options' => $sidebar_options,
            'dependency' => array('post_sidebar_enable', '==', true),
        ],
    ],
]);
