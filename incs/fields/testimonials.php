<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the testimonials section instance.
 * @return array
 */
function mthan_section_testimonials_options()
{
    return array(
        array(
            'id'      => 'testimonials_style',
            'type'    => 'select',
            'title'   => 'Testimonials Style',
            'options' => array(
                'style-1' => 'Style 1 (Full Width Carousel)',
                'style-2' => 'Style 2 (Split Layout)',
            ),
            'default' => 'style-1',
        ),
        mthan_subtitle_field('Our Testimonials'),
        mthan_title_field('What Our Clients Say'),
        array(
            'id'         => 'sec_desc',
            'type'       => 'textarea',
            'title'      => 'Description (Style 1)',
            'default'    => 'Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system.',
            'dependency' => array('testimonials_style', '==', 'style-1'),
        ),
        array(
            'id'      => 'testimonials_repeater',
            'type'    => 'group',
            'title'   => 'Testimonials List',
            'fields'  => array(
                mthan_name_field(),
                array(
                    'id'      => 'image',
                    'type'    => 'media',
                    'library' => 'image',
                    'preview' => false,
                    'title'   => 'Author Image',
                ),
                array(
                    'id'    => 'region',
                    'type'  => 'text',
                    'title' => 'Region/Location',
                ),
                array(
                    'id'      => 'rating',
                    'type'    => 'select',
                    'title'   => 'Rating',
                    'options' => array(
                        '5'   => '5 Stars',
                        '4.5' => '4.5 Stars',
                        '4'   => '4 Stars',
                        '3.5' => '3.5 Stars',
                        '3'   => '3 Stars',
                    ),
                    'default' => '5',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Testimonial Title (Style 2)',
                ),
                array(
                    'id'    => 'text',
                    'type'  => 'textarea',
                    'title' => 'Testimonial Text',
                ),
            ),
            'default' => array(
                array(
                    'name'   => 'Robert Anderson',
                    'region' => 'New York, USA',
                    'rating' => '5',
                    'title'  => 'Outstanding Garden Service!',
                    'text'   => 'Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system.',
                ),
                array(
                    'name'   => 'Maria Santos',
                    'region' => 'Los Angeles, USA',
                    'rating' => '5',
                    'title'  => 'Professional & Reliable Team',
                    'text'   => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC making it over 2000 years old.',
                ),
                array(
                    'name'   => 'James Collins',
                    'region' => 'Chicago, USA',
                    'rating' => '4.5',
                    'title'  => 'Transformed Our Backyard',
                    'text'   => 'There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.',
                ),
                array(
                    'name'   => 'Sarah O\'Connor',
                    'region' => 'San Francisco, USA',
                    'rating' => '5',
                    'title'  => 'Highly Recommended',
                    'text'   => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.',
                ),
            ),
        ),
        array(
            'id'         => 'decorative_thumbs',
            'type'       => 'group',
            'title'      => 'Decorative Thumbs (Style 2)',
            'max'        => 4,
            'fields'     => array(
                mthan_name_field(),
                array(
                    'id'      => 'image',
                    'type'    => 'media',
                    'library' => 'image',
                    'preview' => false,
                    'title'   => 'Thumb Image',
                ),
            ),
            'dependency' => array('testimonials_style', '==', 'style-2'),
        ),
    );
}
