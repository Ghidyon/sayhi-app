<?php
    require_once('app.php');

    session_destroy(); // Destroy all user sessions
    redirect('home');
?>