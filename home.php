<?php require_once(APP_ROOT.DS.'app.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="images/favicon.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?= SITE_NAME; ?> - Home</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="darkBlue">
        <div class="container">
            <div class="nav-wrapper">
                <img class="brand-logo logo" src="images/sayhi-logo.png" alt="Logo">
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="signup.php"
                            class="waves-effect waves-light btn lightBlue darkBlue-text rounded bold lr-padding">Sign
                            Up</a>
                    </li>
                    <li><a href="login.php"
                            class="waves-effect waves-light btn white darkBlue-text rounded bold lr-padding">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="signup.php" class="waves-effect waves-light btn darkBlue-text white rounded bold lr-padding">Sign
                Up</a>
        </li>
        <li><a href="login.php"
                class="waves-effect waves-light btn darkBlue-text white rounded bold lr-padding">Login</a></li>
    </ul>

    <!-- Content Section -->

    <div class="container top-padding">
        <div class="row">
            <div class="col s12 xl7">
                <h1 class="thin place-center">Simple. Secure.<br>Fast Messaging.</h1>

                <div class="col offset-s1 s10 offset-m2 m8 offset-l2 l8 xl10 place-center">
                    <p>
                        With <span class="darkBlue-text bold">sayhi<img class="mark"
                                src="images/smileymark.png" /></span>
                        you'll get
                        simple, secure
                        and fast messaging,
                        available on devices all over
                        the world.
                    </p>
                </div>

                <div class="top-margin place-center">
                    <img class="google-play bottom-margin" src="images/google-play-badge.png" alt="">
                    <img class="apple-store bottom-margin" src="images/download-on-the-app-store.png" alt="">
                </div>

                <div class="place-center">
                    <img class="windows bottom-margin" src="images/get-on-windows.png" alt="">
                    <img class="mac-store bottom-margin" src="images/download-on-the-mac-app-store.jpg" alt="">
                </div>

            </div>

            <div class="col hide-on-med-and-down hide-on-large-only show-on-extra-large xl5">
                <img class="blue-smiley" src="images/blue-smiley.png" alt="Blue Smiley"/>
            </div>
        </div>
    </div>

    <!-- Footer Section -->

    <footer class="page-footer darkBlue">
        <img class="wave responsive-img" src="images/wave.svg" alt="">
        <div class="container">
            <div class="row">
                <div class="col s12 stay-centered">
                    <img class="logo" src="images/sayhi-logo.png" alt="">
                </div>
                <div class="col offset-s2 s3 m5 footer-margin">
                    <ul>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Features</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Security</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Business</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Privacy</a></li>
                    </ul>
                </div>
                <div class="col m4 hide-on-small-only footer-margin">
                    <ul>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">About</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Careers</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Get in Touch</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Blog</a></li>
                    </ul>
                </div>
                <div class="col offset-s2 s4 offset-m1 m2 footer-margin">
                    <ul>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">FAQ</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Help</a></li>
                        <li class="margin-down"><a href="#!" class="lightBlue-text uppercase">Community</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copyright darkBlue">
                <div class="col s2">
                    <h6 class="lightBlue-text footer-margin">© 2020 - <?= date('Y'); ?> Ghidyon</h6>
                </div>
                <div class="col footer-margin">
                    <a href="#!"
                        class="right-margin btn-large waves-light waves-effect lightBlue btn-floating footer-btn">
                        <img class="footer-icon" src="images/facebook-f.svg" alt="">
                    </a>
                    <a href="#!" class="btn-large waves-light waves-effect lightBlue btn-floating footer-btn"><img
                            class="footer-icon" src="images/twitter.svg" alt=""></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="js/jquery-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>