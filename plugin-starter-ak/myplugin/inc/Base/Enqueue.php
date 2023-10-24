<?php 
/***
 * 
 * @package akramplugin
 * 
 */

 namespace Inc\Base;

 class Enqueue {
    public function register(){
        add_action('admin_enqueue_scripts', array($this, 'add_script'));
    }

    function add_script(){
        wp_enqueue_style('myadminstyle', PLUGIN_URL . '/assets/myadminstyle.css');
        wp_enqueue_script('myadminjs', PLUGIN_URL . '/assets/myadminjs.js');
    }
      
 }


?>