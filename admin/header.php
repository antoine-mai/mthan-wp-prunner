<?php
// Header Settings
CSF::createSection($prefix, array(
    'id' => 'header_settings',
    'title' => 'Header Settings',
    'icon' => 'fas fa-arrow-up',
    'fields' => array(
            array(
            'id' => 'header_sticky',
            'type' => 'switcher',
            'title' => 'Sticky Header',
            'default' => true,
        ),
            array(
            'id' => 'header_button',
            'type' => 'switcher',
            'title' => 'Show Header Button',
            'default' => false,
        ),
    )
));