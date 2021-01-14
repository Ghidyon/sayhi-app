<?php

require_once('../app.php');


// When the form submit button is clicked, start validation
if (isset($_POST['sign_user_in'])) {
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);

    $login_data = ["email" => $email, "password" => $password];


    $empty_field_error = empty_field($login_data);
    
    // Check empty field and throw error message
    if (!empty($empty_field_error)) {
        $_SESSION['message'] = $empty_field_error;
        redirect('login');
    }

    
}
?>