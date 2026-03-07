<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the banner section instance.
 * Called by mthan_get_section_instance_fields() → section-instance-fields.php.
 *
 * NOTE: 'title' field MUST be first — CSF group.php:96 uses fields[0] value
 * as the accordion title text. 'image' (media → array) as fields[0] would
 * cause "Array to string conversion".
 *
 * @return array[]
 */
function mthan_section_banners_options()
{
    return array(
        array('type' => 'subheading', 'content' => 'Banner Section Options'),
        array(
            'id'           => 'slides',
            'type'         => 'group',
            'title'        => 'Slides',
            'button_title' => '+ Add Slide',
            'fields'       => array(
                array('id' => 'title',    'type' => 'text',   'title' => 'Title (H1)'),
                array('id' => 'subtitle', 'type' => 'text',   'title' => 'Subtitle'),
                array('id' => 'image',    'type' => 'upload', 'preview' => false, 'title' => 'Background Image'),
                array('id' => 'align',    'type' => 'select', 'title' => 'Content Alignment', 'options' => array('left' => 'Left', 'center' => 'Center', 'right' => 'Right'), 'default' => 'center'),
                array('id' => 'btn1_text','type' => 'text',   'title' => 'Button 1 Text', 'default' => 'Read More'),
                mthan_page_select_field('btn1_link', 'Button 1 Page'),
                array('id' => 'btn2_text','type' => 'text',   'title' => 'Button 2 Text', 'default' => 'Contact Us'),
                mthan_page_select_field('btn2_link', 'Button 2 Page'),
            ),
            'default'      => array(
                array(
                    'title'     => 'Brilliant Hands <br>For Your Landscaping',
                    'subtitle'  => 'Welcome to Pruners',
                    'image'     => get_template_directory_uri() . '/assets/images/main-slider/1.jpg',
                    'align'     => 'left',
                    'btn1_text' => 'Read More',
                    'btn2_text' => 'Contact Us',
                ),
                array(
                    'title'     => 'Complete Solution <br>for Your Landscaping',
                    'subtitle'  => 'Form of Impression',
                    'image'     => get_template_directory_uri() . '/assets/images/main-slider/2.jpg',
                    'align'     => 'right',
                    'btn1_text' => 'Read More',
                    'btn2_text' => 'Services',
                ),
                array(
                    'title'     => 'We Give Guarantee <br>for Healthy Landscapes',
                    'subtitle'  => '100% Gurantee Works',
                    'image'     => get_template_directory_uri() . '/assets/images/main-slider/3.jpg',
                    'align'     => 'left',
                    'btn1_text' => 'Read More',
                    'btn2_text' => 'Contact Us',
                ),
            ),
        ),
    );
}
