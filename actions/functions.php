<?php

function dump_and_die($element) {
    echo "<pre>";
    var_dump($element);
    echo "</pre>";
    die;
}

function redirect($location) {
    header('location:'.ROOT.$location);
}

function sanitize($data) {
    $sanitize = filter_var(trim($data));
    return $sanitize;
}

function empty_field($data) {
    if(is_array($data)) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $error = 'Please fill in ' . $key . ' field!<br>';
                return $error;
            }
        } 
    } elseif (empty($data)) {
        $error = 'Please fill the empty fields<br>';
        return $error;
    }
}
?>