<?php
    require_once('app.php');
    require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>

    <!-- Navbar -->
    <?php 
        require_once(APP_ROOT . DS . 'includes' . DS . 'nav.php');
    ?>

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
    <script src="<?= ROOT ?>js/jquery-min.js"></script>
    <script src="<?= ROOT ?>js/materialize.min.js"></script>
    <script src="<?= ROOT ?>js/main.js"></script>
</body>

</html>