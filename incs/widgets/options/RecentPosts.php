<?php defined('ABSPATH') || exit;

function mthan_widget_RecentPosts_options() {
    return [
        [
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Popular Post',
        ],
        [
            'id'    => 'count',
            'type'  => 'number',
            'title' => 'Number of Posts',
            'default' => 3,
        ]
    ];
}
