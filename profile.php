<?php
require_once('app.php');

// When login details is correct, extract user session
if (isset($_SESSION['user'])) {
    extract($_SESSION['user']); // extract user session


    require_once(ROOT . DS . 'includes' . DS . 'header.php');
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
            </div>

            <div class="center-align margin-up margin-down1">
                <i class="material-icons size-5 grey-text text-lighten-1">account_circle</i>
            </div>

            <ul class="collection">
                <li class="collection-item body-color avatar">
                    <img class="circle" src="images/user.svg">
                    <p>Name</p>
                    <span class="title bold">Ghidyon</span>
                    <a href="#!" class="secondary-content"><i class="material-icons grey-text text-lighten-1">edit</i></a>
                </li>

                <li class="collection-item body-color avatar">
                    <img class="circle" src="images/information-circle.svg">

                    <p>Bio</p>
                    <span class="title bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis officiis
                        eos
                        hic sapiente. Assumenda esse vitae corrupti ipsam enim eligendi maiores eaque suscipit, adipisci
                        cumque deleniti est, ab accusamus doloribus!</span>
                    <a href="#!" class="secondary-content"><i class="material-icons grey-text text-lighten-1">edit</i></a>
                </li>

                <li class="collection-item body-color avatar">
                    <img class="circle" src="images/phone.svg">
                    <p>Phone</p>
                    <span class="title bold">08160451288</span>
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