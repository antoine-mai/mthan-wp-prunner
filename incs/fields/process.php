<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the process section instance.
 * @return array
 */
function mthan_section_process_options()
{
    return array(
        array(
            'id'      => 'section_style',
            'type'    => 'select',
            'title'   => 'Style',
            'options' => array(
                '1' => 'Style 1 (Image Blocks)',
                '2' => 'Style 2 (Icon Blocks)',
                '3' => 'Style 3 (Flap)', // Standardizing with why-us if applicable, else keeping 1&2
            ),
            'default' => '1',
        ),
        array(
            'id'    => 'sec_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'how we work',
        ),
        array(
            'id'    => 'sec_title',
            'type'  => 'text',
            'title' => 'Title',
            'default' => 'Our Simple Step Working Process',
        ),
        array(
            'id'    => 'header_text',
            'type'  => 'textarea',
            'title' => 'Header Description',
            'default' => 'How to pursue pleasure rationally encounter consequences that painful again is there anyone who loves.',
        ),
        array(
            'id'     => 'process_repeater',
            'type'   => 'group',
            'title'  => 'Process Steps',
            'max'    => 4,
            'fields' => array(
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Title',
                ),
                array(
                    'id'    => 'step_label',
                    'type'  => 'text',
                    'title' => 'Step Label (e.g. Step One or 01)',
                ),
                array(
                    'id'    => 'icon',
                    'type'  => 'upload',
                    'preview' => false,
                    'title' => 'Icon Upload',
                ),
                array(
                    'id'         => 'image',
                    'type'       => 'media',
                    'library'    => 'image',
                    'preview'    => false,
                    'title'      => 'Featured Image',
                    'dependency' => array('section_style', '==', '1'),
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Description',
                ),
            ),
            'default' => array(
                array(
                    'title'      => 'Consultation',
                    'step_label' => 'Step One',
                    'icon'       => 'flaticon-speech-bubble',
                    'text'       => 'How to pursue pleasure rationally encounter consequences that painful again.',
                ),
                array(
                    'title'      => 'Design & Plan',
                    'step_label' => 'Step Two',
                    'icon'       => 'flaticon-blueprint',
                    'text'       => 'Nor again is there anyone who loves or pursues or desires to obtain pain.',
                ),
                array(
                    'title'      => 'Start Working',
                    'step_label' => 'Step Three',
                    'icon'       => 'flaticon-gardener-2',
                    'text'       => 'Expound actual teachings of the master explorer of the truth the master-builder.',
                ),
                array(
                    'title'      => 'Final Result',
                    'step_label' => 'Step Four',
                    'icon'       => 'flaticon-park',
                    'text'       => 'Great explorer of the truth the master-builder of human happiness no one rejects.',
                ),
            ),
        ),
    );
}
