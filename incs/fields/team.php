<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the team section instance.
 * @return array
 */
function mthan_section_team_options()
{
    return array(
            array(
            'id' => 'team_style',
            'type' => 'select',
            'title' => 'Team Style',
            'options' => array(
                'style-1' => 'Style 1 (Grid)',
                'style-2' => 'Style 2 (Carousel)',
            ),
            'default' => 'style-1',
        ),
        mthan_subtitle_field('Our Gardeners'),
        mthan_title_field('Professional Team'),
        array_merge(mthan_btn_text_field('All Members', 'Button Text (Style 1)'), ['dependency' => array('team_style', '==', 'style-1')]),
        array_merge(mthan_btn_link_field('#', 'Button Link (Style 1)'), ['dependency' => array('team_style', '==', 'style-1')]),
            array(
            'id' => 'team_repeater',
            'type' => 'group',
            'title' => 'Team Members',
            'max' => 3,
            'fields' => array(
                    mthan_name_field(),
                    array(
                    'id' => 'image',
                    'type' => 'media',
                    'library' => 'image',
                    'preview' => false,
                    'title' => 'Member Image',
                ),
                    array(
                    'id' => 'designation',
                    'type' => 'text',
                    'title' => 'Designation',
                ),
                    array(
                    'id' => 'phone',
                    'type' => 'text',
                    'title' => 'Phone/Email',
                ),
                    array(
                    'id' => 'facebook',
                    'type' => 'text',
                    'title' => 'Facebook Link',
                ),
                    array(
                    'id' => 'twitter',
                    'type' => 'text',
                    'title' => 'Twitter Link',
                ),
                    array(
                    'id' => 'instagram',
                    'type' => 'text',
                    'title' => 'Instagram Link',
                ),
            ),
            'default' => array(
                    array(
                    'name' => 'Robert Adson',
                    'designation' => 'Garden Expert',
                    'phone' => '(+5) 678 90 12 345',
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ),
                    array(
                    'name' => 'Helena Reese',
                    'designation' => 'Landscape Designer',
                    'phone' => '(+5) 678 90 12 346',
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ),
                    array(
                    'name' => 'Samuel Moris',
                    'designation' => 'Lead Gardener',
                    'phone' => '(+5) 678 90 12 347',
                    'facebook' => '#',
                    'twitter' => '#',
                    'instagram' => '#',
                ),
            ),
        ),
    );
}
