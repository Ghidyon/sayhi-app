<?php

function dump_and_die($element) {
    echo "<pre>";
    var_dump($element);
    echo "</pre>";
    die;
}

// Redirect to another page
function redirect($location) {
    header('location:'.ROOT.$location); // used to move to the specified location page
}


######## Form Validation and Processing ##########

// Check input and remove unwanted spaces and filtering
function sanitize($data) {
    $sanitize = filter_var(trim($data));
    return $sanitize;
}

// Check for empty fields
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

// Check and return error when two passwords do not match
function password_match($password_field, $confirm_password_field) {
    if ($password_field !== $confirm_password_field) {
        $error = 'Passwords do not match!';
        return $error;
    }
}

// Check and return error when a password is less than 8 characters
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

function check_phone($tel) {
    if(!(strlen(intval($tel)) > 7 && strlen(intval($tel)) < 16)) {
        $error = 'Enter a valid phone number!';
        return $error;
    }
}

function validate_email($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {// for validating the email to check if it has the ".com"
        $error = 'Enter a valid email!';
        return $error;
    }
}

function hash_password($password_field, $confirm_password_field) {
    if ($password_field === $confirm_password_field) {
        $password = password_hash($password_field, PASSWORD_DEFAULT);
        return $password;
    }
}

/* function retain_value() {
    if (isset($_SESSION['message']) {

    }
} */