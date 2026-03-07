<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the sponsors section instance.
 * @return array
 */
function mthan_section_sponsors_options()
{
    return array(
        array(
            'id'     => 'sponsors_repeater',
            'type'   => 'group',
            'title'  => 'Sponsors List',
            'fields' => array(
                array(
                    'id'    => 'logo',
                    'type'  => 'upload',
                    'preview' => false,
                    'title' => 'Logo Image',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Link',
                    'default' => '#',
                ),
            ),
        ),
    );
}
