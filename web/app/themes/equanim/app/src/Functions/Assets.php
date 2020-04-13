<?php

namespace App\Functions;

class Assets {

    protected static $themeVersion = '1.0.0';

    /**
     *
     */
    public static function register()
    {
        add_filter( 'wp_enqueue_scripts', array( get_called_class(), 'register_stylesheets') );
        add_filter( 'wp_enqueue_scripts', array( get_called_class(), 'register_scripts') );
    }

    /**
     *
     * Register stylesheets
     *
     */
    public static function register_stylesheets()
    {
        wp_enqueue_style('style', get_stylesheet_directory_uri() . '/dist/app.css', array(), static::$themeVersion);
        wp_enqueue_style('cookie-consent', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css');
    }

    /**
     *
     * Register scripts
     *
     */
    public static function register_scripts()
    {
        wp_deregister_script('jquery-core');
        wp_enqueue_script('jquery-core', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);
        wp_deregister_script('jquery-migrate');
        wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.1.min.js', array(), '3.0.1', true);
        wp_enqueue_script('cookie-consent', '//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js', array(), '', true);
        wp_enqueue_script('app', get_stylesheet_directory_uri() . '/dist/app.js', array(), static::$themeVersion, true);
    }

}