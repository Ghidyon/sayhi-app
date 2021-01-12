<?php

    // Directory Navigation
    session_start(); // Start user session
    define('APP_ROOT', dirname(__FILE__)); // full directory path for the files
    define('DS', DIRECTORY_SEPARATOR); // for a default seperator in the user environment
    
    // Database Connection
    define('ROOT', ''); // changeS to '/' when online
    define('HOST', '127.0.0.1');
    define('DBNAME', '');
    define('USERNAME', '');
    define('PASSWORD', '');
    // define('ROOT', '');

    define('SITE_NAME', 'SayHi');

?>