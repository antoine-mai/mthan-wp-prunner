<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Search Page Settings
**/

CSF::createSection(MTHAN_THEME_OPTIONS, [
    'id'     => 'search_page_settings',
    'title'  => 'Search',
    'icon'   => 'fas fa-search',
    'fields' => [
        mthan_page_select_field('search_page_id', 'Search Page', [
            'desc' => 'Select a dedicated page for search functionality.',
        ]),
        [
            'id'          => 'default_search_page',
            'type'        => 'select',
            'title'       => 'Search Results Page',
            'desc'        => 'Select the page to be used for Search Results.',
            'options'     => 'post',
            'query_args'  => [
                'post_type' => 'mthan_page',
                'posts_per_page' => -1,
            ],
            'placeholder' => 'Select a Page',
        ],
    ]
]);
