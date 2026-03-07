<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the project-outline section instance.
 * @return array
 */
function mthan_section_project_outline_options()
{
    return array(
        array(
            'id'    => 'outline_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Outline Of Project',
        ),
        array(
            'id'     => 'outline_repeater',
            'type'   => 'repeater',
            'title'  => 'Outline Blocks',
            'fields' => array(
                array(
                    'id'    => 'image',
                    'type'  => 'media',
                    'title' => 'Image',
                    'library' => 'image',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Link URL',
                    'default' => '#',
                ),
            ),
            'default' => array(
                array(
                    'title' => 'Before Work',
                    'text'  => 'These cases are perfectly simple and easy to distinguish.',
                    'link'  => '#',
                ),
                array(
                    'title' => 'During Work',
                    'text'  => 'These cases are perfectly simple and easy to distinguish.',
                    'link'  => '#',
                ),
                array(
                    'title' => 'After Work',
                    'text'  => 'These cases are perfectly simple and easy to distinguish.',
                    'link'  => '#',
                ),
            ),
        ),
    );
}
