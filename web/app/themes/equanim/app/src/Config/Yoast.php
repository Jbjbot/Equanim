<?php

namespace App\Config;

class Yoast {

    public static function doesItActivated()
    {
        if(class_exists('WPSEO_Primary_Term'))
            return true;

        return false;
    }

}