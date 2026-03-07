<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the reviews section instance.
 * @return array
 */
function mthan_section_reviews_options()
{
    return array(
        array(
            'id'    => 'sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Our Feedback',
        ),
        array(
            'id'    => 'sec_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Happy Customers',
        ),
        array(
            'id'    => 'review_form_title',
            'type'  => 'text',
            'title' => 'Form Title',
            'default' => 'We Happy to Hear Your Feedback',
        ),
        array(
            'id'    => 'review_form_text',
            'type'  => 'text',
            'title' => 'Form Text',
            'default' => 'Keep the feedback to 200 words or less.',
        ),
        array(
            'id'    => 'avg_rating',
            'type'  => 'text',
            'title' => 'Average Rating',
            'default' => '4.5',
        ),
        array(
            'id'    => 'review_count',
            'type'  => 'text',
            'title' => 'Review Count Text',
            'default' => '[24 Reviews]',
        ),
        array(
            'id'     => 'reviews_repeater',
            'type'   => 'group',
            'title'  => 'Reviews List',
            'fields' => array(
                array(
                    'id'    => 'image',
                    'type'  => 'upload',
                    'preview' => false,
                    'title' => 'Large Image',
                ),
                array(
                    'id'    => 'thumb',
                    'type'  => 'upload',
                    'preview' => false,
                    'title' => 'Author Thumbnail',
                ),
                array(
                    'id'    => 'name',
                    'type'  => 'text',
                    'title' => 'Name',
                ),
                array(
                    'id'    => 'region',
                    'type'  => 'text',
                    'title' => 'Region',
                ),
                array(
                    'id'    => 'rating',
                    'type'  => 'select',
                    'title' => 'Rating',
                    'options' => array(
                        '5' => '5 Stars',
                        '4.5' => '4.5 Stars',
                        '4' => '4 Stars',
                        '3.5' => '3.5 Stars',
                        '3' => '3 Stars',
                    ),
                    'default' => '5',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Feedback Text',
                ),
                array(
                    'id'    => 'video_url',
                    'type'  => 'text',
                    'title' => 'Video URL (Optional)',
                ),
            ),
        ),
    );
}
