<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the awards section instance.
 * @return array
 */
function mthan_section_awards_options()
{
    return array(
        array(
            'id'    => 'awards_subtitle',
            'type'  => 'text',
            'title' => 'Subtitle',
            'default' => 'Our Success',
        ),
        array(
            'id'    => 'awards_title',
            'type'  => 'textarea',
            'title' => 'Title (HTML supported)',
            'default' => 'Most Awards Won <br>By a Company in <br>USA - <span class="theme_color">Pruners&CO</span>',
        ),
        array(
            'id'    => 'awards_text',
            'type'  => 'textarea',
            'title' => 'Description',
            'default' => 'It is a long established fact that a reader will distracted by the readable content.',
        ),
        mthan_btn_text_field('All Our Awards'),
        mthan_btn_link_field(''),
        array(
            'id'    => 'awards_bg_image',
            'type'  => 'media',
            'title' => 'Left Column Background',
            'library' => 'image',
        ),
        array(
            'id'     => 'awards_carousel',
            'type'   => 'group',
            'title'  => 'Awards Carousel',
            'fields' => array(
                array(
                    'id'    => 'year',
                    'type'  => 'text',
                    'title' => 'Year',
                ),
                array(
                    'id'    => 'subtitle',
                    'type'  => 'text',
                    'title' => 'Subtitle',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Award Name',
                ),
                array(
                    'id'    => 'image',
                    'type'  => 'media',
                    'title' => 'Lightbox Image',
                    'library' => 'image',
                ),
            ),
            'default' => array(
                array(
                    'year'     => '2017',
                    'subtitle' => 'wyn’s 2017',
                    'title'    => 'Customer Choice of The Year',
                ),
                array(
                    'year'     => '2014',
                    'subtitle' => 'asla 2014',
                    'title'    => 'Residential Design Awards',
                ),
                array(
                    'year'     => '2010',
                    'subtitle' => 'wyn’s 2010',
                    'title'    => 'Public Parks and Open Space',
                ),
            ),
        ),
    );
}
