<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the project-feedback section instance.
 * @return array
 */
function mthan_section_project_feedback_options()
{
    return array(
        array(
            'id'    => 'feedback_bg',
            'type'  => 'media',
            'title' => 'Background Image',
            'library' => 'image',
        ),
        array(
            'id'    => 'feedback_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Get morethan we expected',
        ),
        array(
            'id'    => 'feedback_text',
            'type'  => 'textarea',
            'title' => 'Feedback Text',
            'default' => 'Thank you for our beautiful new front! Your crew was outstanding & very professional!.',
        ),
        array(
            'id'    => 'feedback_rating',
            'type'  => 'select',
            'title' => 'Rating',
            'options' => array(
                '1' => '1 Star',
                '2' => '2 Stars',
                '3' => '3 Stars',
                '4' => '4 Stars',
                '5' => '5 Stars',
            ),
            'default' => '5',
        ),
        array(
            'id'    => 'feedback_name',
            'type'  => 'text',
            'title' => 'Author Name',
            'default' => 'Louie Daxon,',
        ),
        array(
            'id'    => 'feedback_area',
            'type'  => 'text',
            'title' => 'Author Area',
            'default' => 'New Orleans, usa',
        ),
    );
}
