<?php

namespace App\Config;

class Widgets {

    public static function register()
    {
        add_action( 'widgets_init', array( get_called_class(), 'createWidgetsArea') );
    }

    public static function createWidgetsArea()
    {
        register_sidebar(array(
            'name' 			=> __('Footer column 1','jb-starter-theme'),
            'id' 			=> 'footer-col-1',
            'description'	=> __('Appears in the Footer section of the site.','jb-starter-theme'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' 	=> '</aside>',
            'before_title' 	=> '<h4>',
            'after_title' 	=> '</h4>'
        ) );

        register_sidebar(array(
            'name' 			=> __('Footer column 2','jb-starter-theme'),
            'id' 			=> 'footer-col-2',
            'description'	=> __('Appears in the Footer section of the site.','jb-starter-theme'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' 	=> '</aside>',
            'before_title' 	=> '<h4>',
            'after_title' 	=> '</h4>'
        ) );

        register_sidebar(array(
            'name' 			=> __('Footer column 3','jb-starter-theme'),
            'id' 			=> 'footer-col-3',
            'description'	=> __('Appears in the Footer section of the site.','jb-starter-theme'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' 	=> '</aside>',
            'before_title' 	=> '<h4>',
            'after_title' 	=> '</h4>'
        ) );

        register_sidebar(array(
            'name' 			=> __('Footer column 4','jb-starter-theme'),
            'id' 			=> 'footer-col-4',
            'description'	=> __('Appears in the Footer section of the site.','jb-starter-theme'),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' 	=> '</aside>',
            'before_title' 	=> '<h4>',
            'after_title' 	=> '</h4>'
        ) );
    }

}