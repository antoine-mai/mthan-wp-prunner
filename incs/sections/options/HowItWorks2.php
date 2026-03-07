<?php defined('ABSPATH') || exit;

/**
 * How It Works 2 Section Options
 */
function mthan_section_HowItWorks2_options() {
    $icon_path = get_template_directory_uri() . '/assets/images/icons/';

    return array(
        array(
            'id'    => 'title_icon',
            'type'  => 'upload',
            'title' => 'Title Icon',
            'default' => $icon_path . 'leaf-four.png',
        ),
        array(
            'id'    => 'subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'How It Works',
        ),
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Working Process',
        ),
        array(
            'id'    => 'description',
            'type'  => 'textarea',
            'title' => 'Description',
            'default' => 'How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.',
        ),
        array(
            'id'    => 'items',
            'type'  => 'group',
            'title' => 'Process Steps',
            'default' => array(
                array(
                    'title' => 'Talk with expert',
                    'count' => '01',
                    'icon'  => 'flaticon-consulting',
                    'text'  => 'Which of us every undertakes physical exercise.',
                ),
                array(
                    'title' => 'Design proposal',
                    'count' => '02',
                    'icon'  => 'flaticon-blueprint',
                    'text'  => 'Expound that actual teachings of the great explorer.',
                ),
                array(
                    'title' => 'Start planting',
                    'count' => '03',
                    'icon'  => 'flaticon-gardener-2',
                    'text'  => 'Any right to find fault with man choose to enjoy.',
                ),
                array(
                    'title' => 'Party With Family',
                    'count' => '04',
                    'icon'  => 'flaticon-trees',
                    'text'  => 'Avoid a pain that produces no resultant pleasure.',
                ),
            ),
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'count',
                    'type'  => 'text',
                    'title' => 'Step Number (e.g. 01)',
                ),
                array(
                    'id'    => 'icon',
                    'type'  => 'upload',
                    'title' => 'Icon (Image or flaticon class)',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
            ),
        ),
    );
}
