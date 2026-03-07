<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the facts section instance.
 * @return array
 */
function mthan_section_facts_options()
{
    return array(
        array(
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => array(
                '1' => 'Style 1 (With BG)',
                '2' => 'Style 2 (Full Width)',
            ),
            'default' => '1',
        ),
        array(
            'id'      => 'bg_image',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Background Image',
            'dependency' => array('section_style', '==', '1'),
            'default' => array('url' => get_template_directory_uri() . '/assets/images/background/image-6.jpg')
        ),
        array(
            'id'     => 'facts_repeater',
            'type'   => 'group',
            'title'  => 'Fact Blocks',
            'max'    => 4,
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title/Label',
                ),
                array(
                    'id'    => 'count',
                    'type'  => 'text',
                    'title' => 'Count (number)',
                ),
                array(
                    'id'    => 'suffix',
                    'type'  => 'text',
                    'title' => 'Suffix (e.g. k, +, %)',
                ),
                array(
                    'id'    => 'sub_text',
                    'type'  => 'text',
                    'title' => 'Subtext (Style 2 only)',
                ),
                mthan_icon_field(),
            ),
            'default' => array(
                array('icon' => 'flaticon-park', 'count' => '2.5', 'suffix' => 'k', 'title' => 'Completed Projects', 'sub_text' => 'Professional Designers'),
                array('icon' => 'flaticon-gardener', 'count' => '108', 'suffix' => '', 'title' => 'Expert Landscapers', 'sub_text' => 'Ongoing in Company'),
                array('icon' => 'flaticon-medal', 'count' => '23', 'suffix' => '+', 'title' => 'Awards and Honors', 'sub_text' => 'Winning Landscapers'),
                array('icon' => 'flaticon-customer-review-1', 'count' => '99', 'suffix' => '%', 'title' => 'Satisfied Customers', 'sub_text' => 'Satisfied by Our Work'),
            ),
        ),
    );
}
