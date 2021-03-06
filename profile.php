<?php
require_once('app.php');

// When login details is correct, extract user data from session for usage on page
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']); // extract user session

    #### User Data we need:
    /*  
    *  $name
    *  $phone
    *  $email
    */

    // HTML header tags
    require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

    <body>

        <div class="border">
            <div class="header darkBlue">
                <div class="chat-header">
                    <a href="chat" class="right-margin">
                        <i class="material-icons white-text size-2">keyboard_arrow_left</i>
                    </a>
                    <span class="white-text size-1">Profile</span>
                </div>
                <div class="right-align">
                    <a href="<?= ROOT ?>actions/logout.php" class="tiny-bottom-margin waves-effect waves-light btn white darkBlue-text rounded bold lr-padding">Logout</a>
                </div>
            </div>

            <div class="center-align margin-up margin-down1">
                <i class="material-icons size-5 grey-text text-lighten-1">account_circle</i>
            </div>

            <ul class="collection">
                <li class="collection-item body-color avatar">
                    <img class="circle" src="images/user.svg">
                    <p>Name</p>
                    <span class="title bold"><?= $name; ?></span>
                    <a href="#!" class="secondary-content"><i class="material-icons grey-text text-lighten-1">edit</i></a>
                </li>

                <li class="collection-item body-color avatar">
                    <img class="circle" src="images/email.svg">
                    <p>Email</p>
                    <span class="title bold"><?= $email; ?></span>
                    <a href="#!" class="secondary-content"><i class="material-icons grey-text text-lighten-1">edit</i></a>
                </li>

                <li class="collection-item body-color avatar">
                    <img class="circle" src="images/phone.svg">
                    <p>Phone</p>
                    <span class="title bold"><?= $phone; ?></span>
                    <a href="#!" class="secondary-content"><i class="material-icons grey-text text-lighten-1">edit</i></a>
                </li>
            </ul>
        </div>

    </body>


</html>

<?php
} else {
    redirect('login');
}
?>