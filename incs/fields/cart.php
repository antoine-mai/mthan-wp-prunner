<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the cart section instance.
 * @return array
 */
function mthan_section_cart_options()
{
    return array(
        array(
            'type'    => 'notice',
            'style'   => 'info',
            'content' => 'This section displays the cart content. Most logic is handled by WooCommerce.',
        ),
    );
}
