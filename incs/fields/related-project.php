<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the related-project section instance.
 * @return array
 */
function mthan_section_related_project_options()
{
    return array(
        array(
            'id'    => 'related_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Related Projects',
        ),
        array(
            'id'     => 'related_repeater',
            'type'   => 'repeater',
            'title'  => 'Related Projects',
            'fields' => array(
                array(
                    'id'    => 'image',
                    'type'  => 'media',
                    'title' => 'Image',
                    'library' => 'image',
                ),
                array(
                    'id'    => 'cat',
                    'type'  => 'text',
                    'title' => 'Category',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
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
                    'cat'   => 'Lawn Care',
                    'title' => 'Sprinkler Irrigation',
                    'link'  => '#',
                ),
                array(
                    'cat'   => 'Garden Care',
                    'title' => 'Communual Garden',
                    'link'  => '#',
                ),
                array(
                    'cat'   => 'Pathways',
                    'title' => 'Rubbish Removal',
                    'link'  => '#',
                ),
                array(
                    'cat'   => 'Pathways',
                    'title' => 'Rubbish Removal',
                    'link'  => '#',
                ),
            ),
        ),
    );
}
