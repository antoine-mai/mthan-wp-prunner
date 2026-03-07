<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the checkout section instance.
 * @return array
 */
function mthan_section_checkout_options()
{
    return array(
            array(
            'type' => 'notice',
            'style' => 'info',
            'content' => 'This section displays the checkout form. Most logic is handled by WooCommerce.',
        ),
    );
}
