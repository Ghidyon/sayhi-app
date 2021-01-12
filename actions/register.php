<?php
require_once('../app.php');

if (isset($_POST['register'])) {
    $name = sanitize($_POST["name"]);
    $email = sanitize($_POST["email"]);
    $phone = sanitize($_POST["phone"]);
    $password = sanitize($_POST["password"]);
    $c_password = sanitize($_POST["c_password"]);

    $user_data = ['name' => $name, 'email' => $email, 'phone' => $phone, 'password' => $password, 'confirm_password' => $c_password];

    $error = empty_field($user_data);

    if(!empty($error)) {
        echo $error;
        $_SESSION['msg'] = $error;
        redirect('signup');
    }

} else {
    // take the user back to the sign up page
    // header('location:'.ROOT.'signup');  used to keep people off some files
    redirect('home');
}