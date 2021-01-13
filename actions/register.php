<?php
require_once('../app.php');

// When form submit button is clicked, start validation
if (isset($_POST['register'])) {
    $name = sanitize($_POST["name"]);
    $email = sanitize($_POST["email"]);
    $phone = sanitize($_POST["phone"]);
    $password = sanitize($_POST["password"]);
    $c_password = sanitize($_POST["c_password"]);

    $user_data = ['name' => $name, 'email' => $email, 'phone' => $phone, 'password' => $password, 'confirm_password' => $c_password];

    $empty_field_error = empty_field($user_data);

    // Check empty field and throw error message
    if (!empty($empty_field_error)) {
        $_SESSION['message'] = $empty_field_error; // sets error message into the $_SESSION array
        redirect('signup');
    }

    $password_match_error = password_match($user_data['password'], $user_data['confirm_password']);
    
    // Check if two passwords match and throw error message
    if (!empty($password_match_error)) {
        $_SESSION['message'] = $password_match_error;
        redirect('signup');
    }
    
    $password_strength_error = password_strength($user_data['password']);

    // Check if password exceeds 7 characters and throw error message
    if (!empty($password_strength_error)) {
        $_SESSION['message'] = $password_strength_error;
        redirect('signup');
    }
    
    $check_phone_error = check_phone($user_data['phone']);

    // Check for valid phone number and throw error message
    if (!empty($check_phone_error)) {
        $_SESSION['message'] = $check_phone_error;
        redirect('signup');
    }

    $check_email_error = validate_email($user_data['email']);

    // Check for valid email and throw error message
    if (!empty($check_email_error)) {
        $_SESSION['message'] = $check_email_error;
        redirect('signup');
    }

} else {
    // take the user back to the home page
    // header('location:'.ROOT.'signup');  used to keep people off some files
    redirect('home');
}