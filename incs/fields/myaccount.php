<?php defined('ABSPATH') or die('Cheatin\' uh?');
/**
 * Returns the CSF field definitions for the myaccount section instance.
 * @return array
 */
function mthan_section_myaccount_options()
{
    return array(
        array(
            'id'    => 'login_title',
            'type'  => 'text',
            'title' => 'Login Form Title',
            'default' => 'Login',
        ),
        mthan_btn_text_field('Login Now', 'Login Button Text', 'login_btn_text'),
        array(
            'id'    => 'register_title',
            'type'  => 'text',
            'title' => 'Register Form Title',
            'default' => 'Register',
        ),
        mthan_btn_text_field('Register Here', 'Register Button Text', 'register_btn_text'),
        array(
            'id'    => 'register_footer_text',
            'type'  => 'text',
            'title' => 'Register Footer Text',
            'default' => '* You must be a free registered user.',
        ),
    );
}
