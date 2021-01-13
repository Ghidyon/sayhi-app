<?php

function dump_and_die($element) {
    echo "<pre>";
    var_dump($element);
    echo "</pre>";
    die;
}

function redirect($location) {
    header('location:'.ROOT.$location); // used to move to the specified location page
}

function sanitize($data) {
    $sanitize = filter_var(trim($data));
    return $sanitize;
}

function empty_field($data) {
    if(is_array($data)) {
        foreach ($data as $key => $value) {
            if (empty($value)) {
                $error = 'Please fill in ' . $key . ' field!';
                return $error;
            }
        } 
    } elseif (empty($data)) {
        $error = 'Please fill the empty fields';
        return $error;
    }
}

function password_match($password_field, $confirm_password_field) {
    if ($password_field !== $confirm_password_field) {
        $error = 'Passwords do not match!';
        return $error;
    }
}

function password_strength($password) {
    if (strlen($password) > 1 && strlen($password) < 8) {
        $error = 'Password must be 8 characters long!';
        return $error;
    }
}

function toast($message, $color, $duration) {
    $toast =    "<script>
                    M.toast({
                        html: " . "'" . $message . "'" . ",
                        classes: 'rounded $color',
                        displayLength: $duration
                    });
                </script>";
    echo $toast;
}

/* function check_phone($tel) {
    if($tel > )
} */