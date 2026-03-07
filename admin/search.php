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
        mthan_page_select_field('default_search_page', 'Search Results Page', [
            'desc' => 'Select the page to be used for Search Results.',
        ])
    ]
]);
