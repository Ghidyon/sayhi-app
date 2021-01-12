<?php

    // Directory Navigation
    session_start(); // Start user session
    define('APP_ROOT', dirname(__FILE__)); // full directory path for the files
    define('DS', DIRECTORY_SEPARATOR); // for a default seperator in the user environment
    
    // Database Connection
    define('HOST', '127.0.0.1');
    define('DBNAME', '');
    define('USERNAME', '');
    define('PASSWORD', '');
    // define('ROOT', '');
    
    // folder handle
    define('SITE_NAME', 'SayHi');
    define('ROOT', '/hiapp/'); // change to '/' when online
    
    // getting scripts for actions
    require_once(APP_ROOT . DS . 'actions' . DS . 'functions.php');
?>