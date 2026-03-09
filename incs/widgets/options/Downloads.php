<?php defined('ABSPATH') || exit;

function mthan_widget_Downloads_options() {
    return [
        [
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Download Materials',
        ],
        [
            'id'    => 'items',
            'type'  => 'group',
            'title' => 'Download Items',
            'fields' => [
                [
                    'id'    => 'name',
                    'type'  => 'text',
                    'title' => 'Name',
                ],
                [
                    'id'    => 'subtitle',
                    'type'  => 'text',
                    'title' => 'Subtitle',
                ],
                [
                    'id'    => 'file',
                    'type'  => 'upload',
                    'title' => 'File',
                ],
                [
                    'id'    => 'icon',
                    'type'  => 'upload',
                    'title' => 'Icon (Optional)',
                ],
            ]
        ]
    ];
}
