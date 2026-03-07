<?php defined('ABSPATH') || exit;

/**
 * Contact 2 Section Options
 */
function mthan_section_Contact2_options() {
    return array(
        array(
            'id'    => 'left_title',
            'type'  => 'textarea',
            'title' => 'Left Title',
            'default' => 'Do You Need Our Landscaping Service? Make an Appointment.',
        ),
        array(
            'id'    => 'map_iframe',
            'type'  => 'textarea',
            'title' => 'Map Iframe Code',
            'default' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77179.27405929092!2d144.96587780970705!3d-37.8497500129152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d34379057b1%3A0xf0456760532d450!2sQueen%20Victoria%20Market!5e0!3m2!1sen!2s!4v1602054031836!5m2!1sen!2s" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
        ),
        array(
            'id'    => 'info_items',
            'type'  => 'group',
            'title' => 'Information Items',
            'default' => array(
                array(
                    'icon' => 'flaticon-internet',
                    'text' => "53 Garden Street \nLos Anegles 90029 USA",
                ),
                array(
                    'icon' => 'flaticon-message-1',
                    'text' => "<a href=\"tel:(+5)6789012345\">(+5) 678 90 12 345</a><br><a href=\"mailto:service@Prunersteam.com\">service@Prunersteam.com</a>",
                ),
            ),
            'fields' => array(
                array(
                    'id'    => 'icon',
                    'type'  => 'icon',
                    'title' => 'Icon Code (flaticon-*)',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Information Text/HTML',
                ),
            ),
        ),
        array(
            'id'    => 'form_title',
            'type'  => 'text',
            'title' => 'Form Title',
            'default' => 'Make an Appointment',
        ),
        array(
            'id'    => 'form_text',
            'type'  => 'textarea',
            'title' => 'Form Description',
            'default' => 'Fill out the form below and then Set a Day and Time that works best for you!.',
        ),
        array(
            'id'    => 'cf7_shortcode',
            'type'  => 'text',
            'title' => 'Contact Form 7 Shortcode',
        ),
    );
}
