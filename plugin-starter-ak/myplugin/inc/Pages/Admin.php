<?php
/***
 * 
 * @package akramplugin
 * 
 */
namespace Inc\Pages;

 class Admin {

    public function register(){
        //hook for admin menu
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    //add admin pages
    public function add_admin_pages(){
        add_menu_page( 'MyPlugin Page', 'myplugin', 'manage_options', 'myplugin_samuk', array($this, 'admin_index'), 'dashicons-store', 110 );
    }

    public function admin_index(){
        require_once PLUGIN_PATH . '/templates/admin.php' ;
    }
 
 }


?>