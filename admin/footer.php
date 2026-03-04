<?php
// Footer Settings
CSF::createSection($prefix, array(
    'id' => 'footer_settings',
    'title' => 'Footer Settings',
    'icon' => 'fas fa-arrow-down',
    'fields' => array(
            array(
            'id' => 'footer_text',
            'type' => 'wp_editor',
            'title' => 'Copyright Text',
            'default' => '© ' . date('Y') . ' Mthan WP. All rights reserved.',
        ),
    )
));