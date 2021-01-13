<?php
    // require_once('app.php');
    require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>


    <!-- Navbar -->
    <nav class="darkBlue">
        <div class="container">
            <div class="nav-wrapper">
                <a href="home.php" class="brand-logo">
                    <img class="logo" src="images/sayhi-logo.png" alt="Logo">
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="home.php"
                            class="waves-effect waves-light btn lightBlue darkBlue-text rounded bold lr-padding">Home</a>
                    </li>
                    <li><a href="signup.php"
                            class="waves-effect waves-light btn white darkBlue-text rounded bold lr-padding">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="home.php"
                class="waves-effect waves-light btn darkBlue-text white rounded bold lr-padding">Home</a>
        </li>
        <li><a href="signup.php" class="waves-effect waves-light btn darkBlue-text white rounded bold lr-padding">Sign
                Up</a></li>
    </ul>

    <!-- Sign Up Form -->
    <div class="form-container">
        <div class="container">
            <div class="row">
                <form class="col offset-s1 s10 m12">
                    <div class="row">
                        <div class="col s12 center-align margin-down">
                            <img src="images/smileymark.png" class="form-logo" alt="">
                        </div>

                        <div class="col s12 center-align margin-down1">
                            <h6>Enter your details to login.</h6>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 offset-xl3 xl6">
                            <i class="material-icons prefix darkBlue-text">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 offset-xl3 xl6">
                            <i class="material-icons prefix darkBlue-text">lock</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>

                        <div class="col s12 center-align margin-up">
                            <a href="chat.php"
                                class="waves-effect btn-large transparent darkBlue-text bold rounded">Login</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Scripts -->
    <script src="js/jquery-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/main.js"></script>
    <?php
    if (isset($_SESSION['successful_message'])) {

        toast($_SESSION['successful_message'], 'darkBlue', '5000');
        $_SESSION['successful_message'] = null;

    }
    ?>
</body>

</html>