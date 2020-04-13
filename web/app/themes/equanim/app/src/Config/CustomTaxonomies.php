<?php

namespace App\Config;

class CustomTaxonomies {

    public static function register()
    {
        add_action( 'init', array(get_called_class(), 'arguments') );
    }

    public static function arguments()
    {
        return false;
    }

}