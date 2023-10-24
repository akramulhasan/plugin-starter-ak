<?php 
/***
 * 
 * @package akramplugin
 * 
 /*
Plugin Name: My Plugin
Description: This is a simple plugin
Author: Ak
Author URI: https://www.akramul.com
Plugin URI: https://www.myplugin.com
Version: 1.0
Text Domain: akramplugin
*/

// If this file called directly, abort
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here?' );

// require the composer autoload
if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}


// Define the constants
define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('PLUGIN', plugin_basename( __FILE__ ));

use Inc\Init;
use Inc\Base\Activate;
use Inc\Base\Deactivate;


/**
 * 
 * Code that runs on plugin activation and deactivation
 */
function activate_myplugin(){
    Activate::activate();
}

function deactivate_myplugin(){
    Deactivate::deactivate();
}

register_activation_hook( __FILE__ , 'activate_myplugin' );
register_deactivation_hook( __FILE__ , 'deactivate_myplugin' );


// Initialize all the core classes
if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}