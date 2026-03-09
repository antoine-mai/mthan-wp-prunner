<?php defined('ABSPATH') or die('Cheatin\' uh?');

CSF::createSection(MTHAN_THEME_OPTIONS, array(
    'title'  => 'Sidebars',
    'icon'   => 'fas fa-columns',
    'fields' => array(
        array(
            'id'                     => 'dynamic_sidebars',
            'type'                   => 'group',
            'title'                  => 'Custom Sidebars',
            'subtitle'               => 'Create custom sidebars here. After saving, you can add widgets to them in Appearance > Widgets.',
            'accordion_title_auto'   => true,
            'accordion_title_prefix' => 'Sidebar: ',
            'accordion_title_number' => true,
            'fields'                 => array(
                array(
                    'id'    => 'name',
                    'type'  => 'text',
                    'title' => 'Sidebar Name',
                    'help'  => 'Enter a unique name for the sidebar.',
                ),
                array(
                    'id'    => 'id',
                    'type'  => 'text',
                    'title' => 'Sidebar ID',
                    'help'  => 'Enter a unique ID (lowercase, no spaces). e.g., service_sidebar_1',
                    'attributes' => array(
                        'pattern' => '[a-z0-9_-]+',
                        'title'   => 'Only lowercase letters, numbers, hyphens and underscores allowed.'
                    )
                ),
                array(
                    'id'    => 'description',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
            )
        ),
        array(
            'type'    => 'subheading',
            'content' => 'Search Widget Settings',
        ),
        array(
            'id'      => 'search_placeholder',
            'type'    => 'text',
            'title'   => 'Search Placeholder',
            'default' => 'Enter Keyword ...',
        ),
        array(
            'type'    => 'subheading',
            'content' => 'Call To Action (CTA) Widget',
        ),
        array(
            'id'      => 'sidebar_cta_title',
            'type'    => 'text',
            'title'   => 'CTA Title',
            'default' => 'Let’s Start Your Project <br>Contact Experts',
        ),
        array(
            'id'      => 'sidebar_cta_email',
            'type'    => 'text',
            'title'   => 'CTA Email',
            'default' => 'service@lander.com',
        ),
        array(
            'id'      => 'sidebar_cta_phone',
            'type'    => 'text',
            'title'   => 'CTA Phone',
            'default' => '(+5) 678 90 12 345',
        ),
        array(
            'id'      => 'sidebar_cta_btn_text',
            'type'    => 'text',
            'title'   => 'CTA Button Text',
            'default' => 'Get a Quote',
        ),
        mthan_page_select_field('sidebar_cta_btn_link', 'CTA Button Link', [
            'default' => [
                'url' => '#'
            ]
        ]),
        array(
            'id'      => 'sidebar_cta_bg',
            'type'    => 'upload',
            'title'   => 'CTA Background Image',
            'default' => get_template_directory_uri() . '/assets/images/background/call-to-bg-2.jpg',
        ),
        array(
            'type'    => 'subheading',
            'content' => 'Download Materials Widget',
        ),
        array(
            'id'      => 'sidebar_download_title',
            'type'    => 'text',
            'title'   => 'Widget Title',
            'default' => 'Download Materials',
        ),
        array(
            'id'                     => 'sidebar_downloads',
            'type'                   => 'group',
            'title'                  => 'Downloads List',
            'button_title'           => 'Add Download',
            'accordion_title_auto'   => true,
            'accordion_title_prefix' => 'File: ',
            'accordion_title_number' => true,
            'fields'                 => array(
                array(
                    'id'    => 'name',
                    'type'  => 'text',
                    'title' => 'File Name/Title',
                ),
                array(
                    'id'    => 'subtitle',
                    'type'  => 'text',
                    'title' => 'Subtitle (e.g. 128 KB)',
                ),
                array(
                    'id'    => 'file',
                    'type'  => 'upload',
                    'title' => 'Upload File',
                ),
                array(
                    'id'    => 'icon',
                    'type'  => 'upload',
                    'title' => 'Custom Icon',
                    'help'  => 'Optional. Default is PDF icon.',
                ),
            )
        ),
    )
));
