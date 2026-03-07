<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the cta section instance.
 * @return array
 */
function mthan_section_cta_options()
{
    return array(
        array(
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => array(
                '1' => 'Style 1 (Standard)',
                '2' => 'Style 2 (With Background)',
            ),
            'default' => '1',
        ),
        // Style 1 Fields
        array(
            'id'    => 'cta_heading',
            'type'  => 'text',
            'title' => 'Heading',
            'default' => 'Do you need tree care for your home?',
            'dependency' => array('section_style', '==', '1'),
        ),
        array_merge(mthan_btn_text_field('Send Message', 'Button Text', 'btn_text'), ['dependency' => array('section_style', '==', '1')]),
        array_merge(mthan_btn_link_field('', 'Button Link', 'btn_link'), ['dependency' => array('section_style', '==', '1')]),
        array(
            'id'    => 'cta_phone',
            'type'  => 'text',
            'title' => 'Phone',
            'default' => '+31 65 792 63 11',
            'dependency' => array('section_style', '==', '1'),
        ),
        // Style 2 Fields
        array(
            'id'    => 'cta_bg_2',
            'type'  => 'media',
            'title' => 'Background Image',
            'library' => 'image',
            'dependency' => array('section_style', '==', '2'),
        ),
        array(
            'id'    => 'cta_heading_2',
            'type'  => 'textarea',
            'title' => 'Heading (HTML supported)',
            'default' => 'In Need of  Gardening & Landscaping <br>Maintenence Service?',
            'dependency' => array('section_style', '==', '2'),
        ),
        array_merge(mthan_btn_text_field('Commercial', 'Button 1 Text', 'btn1_text_2'), ['dependency' => array('section_style', '==', '2')]),
        array_merge(mthan_btn_link_field('', 'Button 1 Link', 'btn1_link_2'), ['dependency' => array('section_style', '==', '2')]),
        array_merge(mthan_btn_text_field('Residential', 'Button 2 Text', 'btn2_text_2'), ['dependency' => array('section_style', '==', '2')]),
        array_merge(mthan_btn_link_field('', 'Button 2 Link', 'btn2_link_2'), ['dependency' => array('section_style', '==', '2')]),
    );
}
