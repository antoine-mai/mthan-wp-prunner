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
    )
));
