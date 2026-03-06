<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Default Pages Settings
**/
global $mthan_options_id;

CSF::createSection($mthan_options_id, [
    'id'     => 'home_page_settings',
    'title'  => 'Home Page',
    'icon'   => 'fas fa-home',
    'fields' => [
        [
            'id'          => 'default_homepage',
            'type'        => 'select',
            'title'       => 'Home Page',
            'desc'        => 'Select the page to be used as Site Home Page.',
            'options'     => 'post',
            'query_args'  => [
                'post_type' => 'mthan_page',
                'posts_per_page' => -1,
            ],
            'placeholder' => 'Select a Page',
        ],
        [
            'id'          => 'default_contact_page',
            'type'        => 'select',
            'title'       => 'Contact Page',
            'desc'        => 'Select the page to be used as Contact Page.',
            'options'     => 'post',
            'query_args'  => [
                'post_type' => 'mthan_page',
                'posts_per_page' => -1,
            ],
            'placeholder' => 'Select a Page',
        ],
        [
            'id'          => 'default_search_page',
            'type'        => 'select',
            'title'       => 'Search Page',
            'desc'        => 'Select the page to be used for Search Results.',
            'options'     => 'post',
            'query_args'  => [
                'post_type' => 'mthan_page',
                'posts_per_page' => -1,
            ],
            'placeholder' => 'Select a Page',
        ],
        [
            'id'          => 'default_about_page',
            'type'        => 'select',
            'title'       => 'About Page',
            'desc'        => 'Select the page for About Us.',
            'options'     => 'post',
            'query_args'  => [
                'post_type' => 'mthan_page',
                'posts_per_page' => -1,
            ],
            'placeholder' => 'Select a Page',
        ],
    ]
]);
