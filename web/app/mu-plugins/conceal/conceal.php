<?php

/*
 * Plugin Name: Conceal
 * Description: mu-plugin based on Plate for wordpress on server with php < 7.1.3
 * Author: Julien Bredon
 * Author URI: Not available
 * Version: 1.0.0
 */

// Todo : add login logo
// Todo : add footer text

add_action('after_setup_theme', function() {
    require_if_theme_supports('conceal-disable-menu', __DIR__ . '/src/disable-menu.php');
    require_if_theme_supports('conceal-disable-dashboard', __DIR__ . '/src/disable-dashboard.php');
}, 100);