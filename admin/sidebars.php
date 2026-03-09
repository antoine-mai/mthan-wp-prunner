<?php defined('ABSPATH') or die('Cheatin\' uh?');

CSF::createSection(MTHAN_THEME_OPTIONS, array(
    'title'  => 'Sidebars',
    'icon'   => 'fas fa-columns',
    'fields' => array(
        array(
            'id'                     => 'dynamic_sidebars',
            'type'                   => 'group',
            'title'                  => 'Custom Sidebars',
            'subtitle'               => 'Create custom sidebars and add widgets to them dynamically.',
            'accordion_title_auto'   => true,
            'accordion_title_prefix' => 'Sidebar: ',
            'accordion_title_number' => true,
            'fields'                 => array(
                array(
                    'id'    => 'name',
                    'type'  => 'text',
                    'title' => 'Sidebar Name',
                ),
                array(
                    'id'    => 'id',
                    'type'  => 'text',
                    'title' => 'Sidebar ID',
                    'help'  => 'Lowercase, no spaces (e.g. blog_sidebar).',
                    'attributes' => array('pattern' => '[a-z0-9_-]+')
                ),
                array(
                    'id'    => 'description',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
                array(
                    'id'           => 'widgets',
                    'type'         => 'group',
                    'title'        => 'Widgets',
                    'button_title' => 'Add Widget',
                    'fields'       => array_merge(
                        array(
                            array(
                                'id'      => 'type',
                                'type'    => 'select',
                                'title'   => 'Widget Type',
                                'options' => mthan_get_widgets(),
                            ),
                        ),
                        mthan_get_widget_fields()
                    )
                ),
            )
        ),
        array(
            'type'    => 'content',
            'content' => '<p class="csf-text-muted">Tip: After creating sidebars here, you can assign them to specific pages in Page/Post/Service Options.</p>',
        ),
    )
));
