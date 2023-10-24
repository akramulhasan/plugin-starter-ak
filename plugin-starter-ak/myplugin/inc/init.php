<?php
/**
 * @package akramplugin
 * 
 * 
 */

 namespace Inc;

 // the keyword final will abendon to extend this class
 final class Init {

    /**
     * Store all classes inside an array
     * @return array full list of class
     */
    public static function get_services(){
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLink::class,
        ];
    }

    /**
     * Loop through the classes, initialize them, call the register() method if it exists
     * @return
     */
    public static function register_services(){
        foreach ( self::get_services() as $class) {
            $service = self::instantiate($class);
            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class class from the services array
     * @return class instance, instance of the class
     */
    private static function instantiate($class){
        $service = new $class;
        return $service;
    }
 }       














