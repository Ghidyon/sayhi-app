<?php
require_once('app.php');

// When login details is correct, extract user session
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']); // extract user session


    require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

    <body>

        <div class="chat-container">

            <div class="left row">
                <div class="profile-img col s2">
                    <img class="circle responsive-img" src="images/+234 816 045 1288 20210115_132423.jpg" alt="">
                </div>

            </div>

            <div class="right">

            </div>

        </div>


    </body>

    <!-- Scripts -->
    <?php
    require_once(APP_ROOT . DS . 'includes' . DS . 'scripts.php');
    ?>

    </html>

<?php
} else {
    redirect('login');
}
?>