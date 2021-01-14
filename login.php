<?php
// require_once('app.php');
require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
?>

<body>

    <!-- Navbar -->
    <?php
    require_once(APP_ROOT . DS . 'includes' . DS . 'nav.php');
    ?>

    <!-- Sign Up Form -->
    <div class="form-container">
        <div class="container">
            <div class="row">
                <form action="<?= ROOT ?>actions/sign_user_in.php" method="POST" class="col offset-s1 s10 m12">
                    <div class="row">
                        <div class="col s12 center-align margin-down">
                            <img src="images/smileymark.png" class="form-logo" alt="">
                        </div>

                        <div class="col s12 center-align margin-down1">
                            <h6>Enter your details to login.</h6>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 offset-xl3 xl6">
                            <i class="material-icons prefix darkBlue-text">email</i>
                            <input name="email" id="email" type="email" class="validate" value="<?= retain_input_value($_SESSION['login data'], "email") ?>">
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 offset-xl3 xl6">
                            <i class="material-icons prefix darkBlue-text">lock</i>
                            <input name="password" id="password" type="password" class="validate" value="<?= retain_input_value($_SESSION['login data'], "password") ?>">
                            <label for="password">Password</label>
                        </div>

                        <div class="col s12 center-align margin-up">
                            <button name="sign_user_in" type="submit" class="waves-effect btn-large transparent darkBlue-text bold rounded">Login</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Scripts -->
    <?php
    require_once(APP_ROOT . DS . 'includes' . DS . 'scripts.php');

    if (isset($_SESSION['successful_message'])) {

        toast($_SESSION['successful_message'], 'darkBlue', '5000');
        $_SESSION['successful_message'] = null;
    }
    
    // To display error on validation

    if (isset($_SESSION['message'])) {

        toast($_SESSION['message'], 'red', '5000');
        $_SESSION['message'] = null;
    }
    ?>
</body>

</html>