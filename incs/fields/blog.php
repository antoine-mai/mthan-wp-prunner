<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the blog section instance.
 * @return array
 */
function mthan_section_blog_options()
{
    return array(
        array(
            'id'      => 'blog_sec_subtitle',
            'type'    => 'text',
            'title'   => 'Subtitle',
            'default' => 'News & Updates',
        ),
        array(
            'id'      => 'blog_sec_subtitle_icon',
            'type'    => 'media',
            'library' => 'image',
            'preview' => false,
            'title'   => 'Subtitle Icon',
            'default' => array('url' => get_template_directory_uri() . '/assets/images/icons/leaf-two.png')
        ),
        array(
            'id'      => 'blog_sec_title',
            'type'    => 'text',
            'title'   => 'Title',
            'default' => 'Latest From Blog',
        ),
        mthan_btn_text_field('View More Blog'),
        mthan_btn_link_field(''),
        array(
            'id'      => 'blog_count',
            'type'    => 'number',
            'title'   => 'Number of Posts',
            'default' => 3,
        ),
        array(
            'id'          => 'blog_category',
            'type'        => 'select',
            'title'       => 'Filter by Category',
            'options'     => 'categories',
            'placeholder' => 'All Categories',
        ),
        array(
            'id'      => 'blog_show_pagination',
            'type'    => 'switcher',
            'title'   => 'Show Pagination',
            'default' => false,
        ),
    );
}
