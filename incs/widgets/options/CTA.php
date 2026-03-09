<?php defined('ABSPATH') || exit;

function mthan_widget_CTA_options() {
    return [
        [
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Let’s Start Your Project <br>Contact Experts',
        ],
        [
            'id'    => 'email',
            'type'  => 'text',
            'title' => 'Email',
            'default' => get_option('admin_email'),
        ],
        [
            'id'    => 'phone',
            'type'  => 'text',
            'title' => 'Phone',
            'default' => '(+5) 678 90 12 345',
        ],
        [
            'id'    => 'btn_text',
            'type'  => 'text',
            'title' => 'Button Text',
            'default' => 'Get a Quote',
        ],
        mthan_page_select_field('btn_link', 'Button Link'),
        [
            'id'    => 'bg',
            'type'  => 'upload',
            'title' => 'Background Image',
        ],
    ];
}
