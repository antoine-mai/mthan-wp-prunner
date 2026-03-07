<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the projects section instance.
 * @return array
 */
function mthan_section_projects_options()
{
    return array(
        array(
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => array(
                '1' => 'Style 1 (Carousel)',
                '2' => 'Style 2 (Masonry Grid)',
                '3' => 'Style 3 (Filtered Gallery)',
            ),
            'default' => '1',
        ),
        array(
            'id'    => 'sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Our Projects',
        ),
        array(
            'id'    => 'sec_subtitle_icon',
            'type'  => 'media',
            'library' => 'image',
            'preview' => false,
            'title' => 'Subtitle Icon',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/icons/leaf-two.png')
        ),
        array(
            'id'    => 'sec_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Recent Gallery',
        ),
        array(
            'id'    => 'sec_text',
            'type'  => 'textarea',
            'title' => 'Description (Style 3 only)',
            'default' => 'How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.',
            'dependency' => array('section_style', '==', '3'),
        ),
        // Filters for Style 3
        array(
            'id'     => 'filters_repeater',
            'type'   => 'group',
            'title'  => 'Filter Tabs (Style 3 only)',
            'dependency' => array('section_style', '==', '3'),
            'fields' => array(
                array(
                    'id'    => 'label',
                    'type'  => 'text',
                    'title' => 'Label',
                ),
                array(
                    'id'    => 'filter_class',
                    'type'  => 'text',
                    'title' => 'Filter Class (e.g. garden)',
                ),
            ),
            'default' => array(
                array('label' => 'Garden', 'filter_class' => 'garden'),
                array('label' => 'Landscape', 'filter_class' => 'landscape'),
                array('label' => 'Lawn Care', 'filter_class' => 'lawncare'),
            ),
        ),
        array(
            'id'     => 'projects_repeater',
            'type'   => 'group',
            'title'  => 'Projects List',
            'max'    => 7,
            'fields' => array(
                array(
                    'id'    => 'cat_label',
                    'type'  => 'text',
                    'title' => 'Category Label',
                ),
                array(
                    'id'      => 'image',
                    'type'    => 'media',
                    'library' => 'image',
                    'preview' => false,
                    'title'   => 'Image',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'      => 'link',
                    'type'    => 'text',
                    'title'   => 'Link',
                    'default' => '#',
                ),
                array(
                    'id'          => 'filter_classes',
                    'type'        => 'text',
                    'title'       => 'Filter Classes (Style 3 only)',
                    'description' => 'Space separated classes (e.g. garden lawncare)',
                ),
                array(
                    'id'    => 'is_large',
                    'type'  => 'switcher',
                    'title' => 'Is Large Block? (Style 2 only)',
                ),
            ),
            'default' => array(
                array(
                    'cat_label'      => 'Garden Care',
                    'title'          => 'Communal Garden',
                    'link'           => '#',
                    'filter_classes' => 'garden',
                    'is_large'       => true,
                ),
                array(
                    'cat_label'      => 'Landscape',
                    'title'          => 'Outdoor Living',
                    'link'           => '#',
                    'filter_classes' => 'landscape',
                    'is_large'       => false,
                ),
                array(
                    'cat_label'      => 'Garden Care',
                    'title'          => 'Outdoor Living',
                    'link'           => '#',
                    'filter_classes' => 'garden lawncare',
                    'is_large'       => false,
                ),
                array(
                    'cat_label'      => 'Landscape',
                    'title'          => 'Outdoor Living',
                    'link'           => '#',
                    'filter_classes' => 'landscape',
                    'is_large'       => false,
                ),
                array(
                    'cat_label'      => 'Garden Care',
                    'title'          => 'Outdoor Living',
                    'link'           => '#',
                    'filter_classes' => 'garden',
                    'is_large'       => false,
                ),
                array(
                    'cat_label'      => 'Garden Care',
                    'title'          => 'Outdoor Living',
                    'link'           => '#',
                    'filter_classes' => 'garden lawncare',
                    'is_large'       => false,
                ),
                array(
                    'cat_label'      => 'Garden Care',
                    'title'          => 'Outdoor Living',
                    'link'           => '#',
                    'filter_classes' => 'garden',
                    'is_large'       => true,
                ),
            ),
        ),
        array(
            'id'    => 'lower_text',
            'type'  => 'textarea',
            'title' => 'Lower Text (Style 1 only)',
            'default' => 'We give guarantee for healthy landscapes, You should never compromise with quality.',
            'dependency' => array('section_style', '==', '1'),
        ),
        array(
            'id'    => 'view_all_link',
            'type'  => 'text',
            'title' => 'View All/More Link',
            'default' => '#',
        ),
    );
}
