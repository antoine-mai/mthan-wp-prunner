<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the contact section instance.
 * @return array
 */
function mthan_section_contact_options()
{
    return array(
        array(
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => array(
                '1' => 'Style 1 (Image Right)',
                '2' => 'Style 2 (Map Left)',
                '3' => 'Style 3 (Split Content)',
            ),
            'default' => '1',
        ),
        array(
            'id'    => 'contact_sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Get in Touch',
        ),
        array(
            'id'    => 'contact_sec_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Contact Us',
        ),
        array(
            'id'    => 'contact_discount_text',
            'type'  => 'text',
            'title' => 'Discount Label',
            'default' => 'Save up to 40%',
            'dependency' => array('section_style', '==', '1'),
        ),
        array(
            'id'    => 'contact_sub_text',
            'type'  => 'textarea',
            'title' => 'Sub-text (Description)',
            'default' => 'Get free estimates from Pruners lawn care and gardening professionals in your city.',
            'dependency' => array('section_style', 'any', '1,2'),
        ),
        // Style 2 specific
        array(
            'id'    => 'contact_map_iframe',
            'type'  => 'textarea',
            'title' => 'Map Iframe URL/Embed',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'contact_info_address',
            'type'  => 'textarea',
            'title' => 'Address Text',
            'default' => '53 Garden Street Los Anegles 90029 USA',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'contact_info_phone',
            'type'  => 'text',
            'title' => 'Phone Number',
            'default' => '+(5) 678 90 12 345',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'contact_info_email',
            'type'  => 'text',
            'title' => 'Email Address',
            'default' => 'service@Prunersteam.com',
            'dependency' => array('section_style', '==', '2'),
        ),
        // Style 3 specific
        array(
            'id'    => 'contact_main_office_text',
            'type'  => 'textarea',
            'title' => 'Main Office Address',
            'default' => 'PO Box 515381 Lander, Garden Street LA 90029 USA.',
            'dependency' => array('section_style', '==', '3'),
        ),
        array(
            'id'    => 'contact_working_hours',
            'type'  => 'textarea',
            'title' => 'Working Hours List (one per line)',
            'default' => "Mon-Friday: 09am to 07pm\nSat: 10.00am to 04pm",
            'dependency' => array('section_style', '==', '3'),
        ),
        array(
            'id'    => 'contact_form_bg_image',
            'type'  => 'upload',
                    'preview' => false,
            'title' => 'Form BG Image',
            'dependency' => array('section_style', '==', '3'),
        ),
        array(
            'id'    => 'contact_right_person_image',
            'type'  => 'upload',
                    'preview' => false,
            'title' => 'Right Person Image',
            'dependency' => array('section_style', '==', '3'),
        ),
    );
}
