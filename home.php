<?php
    require_once('app.php');
    require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>

    <!-- Navbar -->
    <?php 
        require_once(APP_ROOT . DS . 'includes' . DS . 'nav.php');
    ?>

<!-- To display error -->
    <?php 
    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
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
    <?php 
        require_once(APP_ROOT . DS . 'includes' . DS . 'footer.php');
    ?>

    <!-- Scripts -->
    <?php 
        require_once(APP_ROOT . DS . 'includes' . DS . 'scripts.php');
    ?>
</body>

</html>