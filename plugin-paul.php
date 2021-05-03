<?php
/**
 * Plugin Name: Paul's First Plugin
 * Plugin URI: http://www.impaullam.com
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Paul
 * Author URI: http://www.impaullam.com
 */
class PluginPaul {
    function __construct() {
        add_action('admin_menu', array($this, 'admin_menu'));
    }

    function admin_menu() {
        $slug = 'post-new.php';
        add_menu_page('Paul\'s Stubs', 'My Menu Title', 'manage_options', 'my-menu', 'my_menu_output' );
        add_submenu_page('my-menu', 'Add New Paul', 'Add New Paul', 'manage_options', 'add-new', array($this, 'add_new_paul') );
        add_submenu_page('my-menu', 'View All Pauls', 'View All Pauls', 'manage_options', 'view-all-pauls', array($this, 'view_all_pauls') );
    }

    function add_new_paul () {
        echo 'Add New Paul';
    }
    function view_all_pauls() {
        echo 'View All Pauls';
    }
}

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for using paul\'s plugin!</p>';
}

new PluginPaul();