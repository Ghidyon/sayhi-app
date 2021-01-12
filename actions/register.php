<?php
require_once('../app.php');

if (isset($_POST['register'])) {
    $first_name = sanitize($_POST["first_name"]);
    $last_name = sanitize($_POST["last_name"]);
    $email = sanitize($_POST["email"]);
    $phone = sanitize($_POST["phone"]);
    $password = sanitize($_POST["password"]);
    $c_password = sanitize($_POST["c_password"]);

    $userData = ['first_name' => $first_name, 'last_name' => $last_name, 'email' => $email, 'phone' => $phone, 'password' => $password, 'confirm_password' => $c_password];

    // dumpAndDie($userData);

    foreach($userData as $key => $value) {
        if(empty($value)) {
            echo 'Please fill in ' . $key . ' field!';
            echo '<br>';
        }
    }
} else {
    // take the user back to the sign up page
    // header('location:'.ROOT.'signup');  used to keep people off some files
    redirect('home');
}