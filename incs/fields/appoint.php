<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the appoint section instance.
 * @return array
 */
function mthan_section_appoint_options()
{
    return array(
        mthan_subtitle_field('About Us'),
        mthan_title_field('Request Job Estimate'),
        mthan_btn_text_field('Request Job Estimate'),
        mthan_btn_link_field(''),
        array(
            'id' => 'appoint_form_title',
            'type' => 'text',
            'title' => 'Form Title',
            'default' => 'Create Appointment',
        ),
        array(
            'id' => 'appoint_form_text',
            'type' => 'textarea',
            'title' => 'Form Description',
            'default' => 'Fill out the form below and then Set a Day and Time that works best for you!.',
        ),
        array(
            'id' => 'appoint_success_msg',
            'type' => 'text',
            'title' => 'Success Message',
            'default' => 'Thank you for make an appoitnment!.',
        ),
        array(
            'id' => 'appoint_calendar_title',
            'type' => 'text',
            'title' => 'Calendar Selection Title',
            'default' => 'Choose Your Comfortable Time',
        ),
    );
}
