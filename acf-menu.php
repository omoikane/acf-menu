<?php
/*
Plugin Name: Advanced Custom Fields: Menu
Plugin URI: https://github.com/omoikane/acf-menu
Description: Adds a 'Menu' field type for the Advanced Custom Fields WordPress plugin.
Version: 1.0.0
Author: Daniele De Nobili
Author URI: http://www.omilandia.com/
License: MIT
License URI: http://opensource.org/licenses/MIT
*/

class acf_field_menu_plugin
{
    /**
     *  Construct
     *
     * @description:
     * @since: 3.6
     * @created: 1/04/13
     */
    function __construct()
    {
        // version 4+
        add_action('acf/register_fields', array($this, 'register_fields'));

        // version 3-
        add_action('init', array($this, 'init'), 5);
    }

    /**
     *  Init
     *
     * @description:
     * @since: 3.6
     * @created: 1/04/13
     */
    function init()
    {
        if (function_exists('register_field')) {
            register_field('acf_field_menu', __DIR__ . '/menu-v3.php');
        }
    }

    /**
     *  register_fields
     *
     * @description:
     * @since: 3.6
     * @created: 1/04/13
     */
    function register_fields()
    {
        include_once('menu-v4.php');
    }
}

new acf_field_menu_plugin();
