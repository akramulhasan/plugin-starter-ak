<?php 
/***
 * 
 * @package akramplugin
 * 
 */

 namespace Inc\Base;

 class SettingsLink {
    private $plugin;

    public function __construct(){
        $this->plugin = PLUGIN;
    }

    public function register(){
        add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
    }

    function settings_link($links){
        $settings_link = "<a href='admin.php?page=myplugin_samuk'>Settings</a>";

        $links[] = $settings_link;

        return $links;
        
    }
      
 }


?>