<?php defined('ABSPATH') or die('Cheatin\' uh?');
// General Settings
CSF::createSection($prefix, [
    'id' => 'general_settings',
    'title' => 'General',
    'icon' => 'fas fa-cogs',
    'fields' => [
        [
            'id' => 'logo',
            'type' => 'upload',
            'title' => 'Logo',
            'preview' => false  
        ],
        [
            'id' => 'favicon',
            'type' => 'upload',
            'title' => 'Favicon',
            'preview' => false
        ]
    ]
]);