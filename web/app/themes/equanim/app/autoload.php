<?php

spl_autoload_register( function($class) {

    // specification of namespace project prefix
    $prefix = 'App\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';

    // get string length
    $len = strlen($prefix);

    // check if the class is in the given namespace
    if(strncmp($prefix, $class, $len) !== 0) {
        // exit to next autoloader
        return;
    }

    // substitute namespace to class name
    $class = substr($class, $len);

    // replace '\\' by '/'
    $class = str_replace('\\', '/', $class);

    // build file path
    $file =  $base_dir . $class . '.php';

    if(file_exists($file)) {
        require $file;
    }

});