<?php

require_once('../app.php');


// When the form submit button is clicked, start validation
if (isset($_POST['login'])) {
    $user_id = sanitize($_POST['email_or_phone']);
    $password = sanitize($_POST['password']);

    $login_data = ["Email or Phone number" => $user_id, "password" => $password];

    // Make a session of values inside input fields
    $_SESSION['login data'] = $login_data; 
    
    // Check empty field and throw error message
    $empty_field_error = empty_field($login_data);
    
    if (!empty($empty_field_error)) {
        $_SESSION['message'] = $empty_field_error;
        redirect('login');
    }

    $user_data = ['email' => $user_id, "password" => $password, 'phone' => $user_id];

    $result = get_user_details('users', $user_data, $conn);

    // dump_and_die($user_details);

    if ($result->num_rows > 0) {
        $fetched_user_data = $result->fetch_assoc();
        dump_and_die($fetched_user_data);
        
    } else {
        $_SESSION['message'] = "⚠ Invalid email or phone number";
        redirect('login');
    }

} else {
    redirect('home');
}
?>