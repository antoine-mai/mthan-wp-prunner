<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the product-details section instance.
 * @return array
 */
function mthan_section_product_details_options()
{
    return array(
        array(
            'id'    => 'product_image',
            'type'  => 'media',
            'title' => 'Product Image',
            'library' => 'image',
        ),
        array(
            'id'    => 'product_title',
            'type'  => 'text',
            'title' => 'Product Name',
            'default' => 'Rubber Glove',
        ),
        array(
            'id'    => 'product_rating',
            'type'  => 'select',
            'title' => 'Rating',
            'options' => array(
                '1' => '1 Star',
                '2' => '2 Stars',
                '3' => '3 Stars',
                '4' => '4 Stars',
                '5' => '5 Stars',
            ),
            'default' => '5',
        ),
        array(
            'id'    => 'product_price',
            'type'  => 'text',
            'title' => 'Price',
            'default' => '$19.00',
        ),
        array(
            'id'    => 'product_short_desc',
            'type'  => 'textarea',
            'title' => 'Short Description',
            'default' => 'Who chooses to enjoy a pleasure that has no one take a trivial example which of us undertakes laborious.',
        ),
        array(
            'id'     => 'highlights',
            'type'   => 'repeater',
            'title'  => 'Highlights',
            'fields' => array(
                array(
                    'id'    => 'text',
                    'type'  => 'text',
                    'title' => 'Highlight Text',
                ),
            ),
            'default' => array(
                array('text' => 'To take a trivial example ever undertakes.'),
                array('text' => 'Who chooses to enjoy a pleasure that has no annoying.'),
                array('text' => 'Produces no resultant pleasure.'),
            ),
        ),
        array(
            'id'    => 'cart_link',
            'type'  => 'text',
            'title' => 'Add to Cart Link/Action',
            'default' => '#',
        ),
        array(
            'id'     => 'tags',
            'type'   => 'repeater',
            'title'  => 'Tags',
            'fields' => array(
                array(
                    'id'    => 'label',
                    'type'  => 'text',
                    'title' => 'Tag Label',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Tag Link',
                    'default' => '#',
                ),
            ),
            'default' => array(
                array('label' => 'Roofing', 'link' => '#'),
                array('label' => 'Safety', 'link' => '#'),
                array('label' => 'Gloves', 'link' => '#'),
            ),
        ),
        array(
            'id'    => 'description_tab',
            'type'  => 'wp_editor',
            'title' => 'Full Description Tab Content',
            'default' => '<p>Nor again is there anyone who loves or pursues or desires to pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious except to obtain some advantage from it? But who has any right to find fault with a man who chooses.</p><p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a completed great of the great explorer of the truth, the master-builder of human happiness except to obtain some advantage.</p>',
        ),
        array(
            'id'     => 'reviews_repeater',
            'type'   => 'repeater',
            'title'  => 'Customer Reviews',
            'fields' => array(
                array(
                    'id'    => 'author_image',
                    'type'  => 'media',
                    'title' => 'Author Image',
                ),
                array(
                    'id'    => 'author_name',
                    'type'  => 'text',
                    'title' => 'Author Name',
                ),
                array(
                    'id'    => 'date',
                    'type'  => 'text',
                    'title' => 'Date',
                ),
                array(
                    'id'    => 'rating',
                    'type'  => 'select',
                    'title' => 'Rating',
                    'options' => array(1=>1,2=>2,3=>3,4=>4,5=>5),
                ),
                array(
                    'id'    => 'comment',
                    'type'  => 'textarea',
                    'title' => 'Comment',
                ),
            ),
            'default' => array(
                array(
                    'author_name' => 'Steven Rich,',
                    'date'        => 'March 10, 2020:',
                    'rating'      => 5,
                    'comment'     => 'Value for money , I use it from long time & it is very useful and good product.',
                ),
            ),
        ),
        array(
            'id'     => 'related_repeater',
            'type'   => 'repeater',
            'title'  => 'Related Products',
            'fields' => array(
                array(
                    'id'    => 'image',
                    'type'  => 'media',
                    'title' => 'Image',
                ),
                array(
                    'id'    => 'title',
                    'type'  => 'text',
                    'title' => 'Name',
                ),
                array(
                    'id'    => 'price',
                    'type'  => 'text',
                    'title' => 'Price',
                ),
                array(
                    'id'    => 'old_price',
                    'type'  => 'text',
                    'title' => 'Old Price (optional)',
                ),
                array(
                    'id'    => 'link',
                    'type'  => 'text',
                    'title' => 'Link',
                    'default' => '#',
                ),
            ),
            'default' => array(
                array('title' => 'Hand Shovel', 'price' => '$46.00', 'link' => '#'),
                array('title' => 'Hand Fork', 'price' => '$24.00', 'old_price' => '$29.00', 'link' => '#'),
            ),
        ),
    );
}
