<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the faqs section instance.
 * @return array
 */
function mthan_section_faqs_options()
{
    return array(
        array(
            'id'    => 'sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Have some questions?',
        ),
        array(
            'id'    => 'sec_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Common Questions',
        ),
        array(
            'id'     => 'faqs_repeater',
            'type'   => 'group',
            'title'  => 'FAQs List',
            'fields' => array(
                array(
                    'id'    => 'question',
                    'type'  => 'text',
                    'title' => 'Question',
                ),
                array(
                    'id'    => 'answer',
                    'type'  => 'textarea',
                    'title' => 'Answer',
                ),
            ),
            'default' => array(
                array(
                    'question' => 'What Makes us Better than Other Lawncare Companies?',
                    'answer'   => 'Must explain to you how all this mistaken idea denouncing pleasure praising pain born and we will give you a complete account of the system.',
                ),
                array(
                    'question' => 'What Happens During the Consultation?',
                    'answer'   => 'Must explain to you how all this mistaken idea denouncing pleasure praising pain born and we will give you a complete account of the system.',
                ),
            ),
        ),
        // Sidebar Fields
        array(
            'id'    => 'side_title',
            'type'  => 'text',
            'title' => 'Sidebar Title',
            'default' => 'Do You Have Questions?',
        ),
        array(
            'id'    => 'side_text',
            'type'  => 'textarea',
            'title' => 'Sidebar Text',
            'default' => 'Ask your questions to our expert team and get answers asap.',
        ),
    );
}
