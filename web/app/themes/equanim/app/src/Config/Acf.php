<?php

namespace App\Config;

class Acf {

    /**
     *
     */
    public static function register()
    {
        add_action( 'acf/init', array( get_called_class(), 'init') );
    }

    /**  Return the ACF option page instance
     *
     */
    public static function init()
    {
        if( function_exists('acf_add_options_page') ) {
            acf_add_options_page(array(
                'page_title' 	=> __('Option du thème', 'jb-starter-theme'),
                'menu_title' 	=> __('Option du thème', 'jb-starter-theme'),
                'menu_slug' 	=> 'theme-general-settings',
            ));
        }

        //acf_update_setting('google_api_key', 'AIzaSyC66J522Sqvke43rbOdL1XwjndHeWh2JRs');
    }

}