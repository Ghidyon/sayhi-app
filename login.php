<?php
require_once(APP_ROOT . DS . 'includes' . DS . 'header.php');
// var_dump(isset($_SESSION['login data']));
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
                <form action="<?= ROOT ?>actions/login.php" method="POST" class="col offset-s1 s10 m12">
                    <div class="row">
                        <div class="col s12 center-align margin-down">
                            <img src="images/smileymark.png" class="form-logo" alt="">
                        </div>

                        <div class="col s12 center-align margin-down1">
                            <h6>Enter your details to login.</h6>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 offset-xl3 xl6">
                            <i class="material-icons prefix darkBlue-text">email</i>
                            <input name="email_or_phone" id="id" type="text" class="validate" value="<?= retain_input_value($_SESSION['login data'], 'Email or Phone number'); ?>">
                            <label for="id">Email or Phone number</label>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 offset-xl3 xl6">
                            <i class="material-icons prefix darkBlue-text">lock</i>
                            <input name="password" id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>

                        <div class="col s12 center-align margin-up">
                            <button name="login" type="submit" class="waves-effect btn-large transparent darkBlue-text bold rounded btn-padding">Login</button>
                        </div>
                    </div>
                    <?php
                    // Reset input value after user submits input
                    $_SESSION['login data'] = NULL;
                    ?>
                </form>
            </div>
        </div>
    </div>


    <!-- Scripts -->
    <?php
    require_once(APP_ROOT . DS . 'includes' . DS . 'scripts.php');

    // To display successful user registration message
    if (isset($_SESSION['successful_message'])) {

        toast($_SESSION['successful_message'], 'darkBlue', '8000');
        $_SESSION['successful_message'] = null;

    }
    
    // To display error on validation

    if (isset($_SESSION['message'])) {

        toast($_SESSION['message'], 'red', '8000');
        $_SESSION['message'] = null;

    }
    ?>
</body>

</html>