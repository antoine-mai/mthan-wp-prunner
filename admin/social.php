<?php defined('ABSPATH') or die('Cheatin\' uh?');
// Social Media Settings
CSF::createSection($prefix, array(
    'id' => 'social_settings',
    'title' => 'Social Media Settings',
    'icon' => 'fas fa-share-alt',
    'fields' => array(
            array(
            'id' => 'social_facebook',
            'type' => 'text',
            'title' => 'Facebook URL',
        ),
            array(
            'id' => 'social_twitter',
            'type' => 'text',
            'title' => 'Twitter URL',
        ),
            array(
            'id' => 'social_instagram',
            'type' => 'text',
            'title' => 'Instagram URL',
        ),
            array(
            'id' => 'social_youtube',
            'type' => 'text',
            'title' => 'YouTube URL',
        ),
    )
));