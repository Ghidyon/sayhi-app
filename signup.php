<?php
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
                <form class="col offset-s1 s10 m12" action="<?= ROOT ?>actions/register.php" method="POST">

                    <div class="row">
                        <div class="col s12 center-align margin-up">
                            <img src="<?= ROOT ?>images/smileymark.png" class="form-logo" alt="">
                        </div>

                        <div class="col s12 center-align margin-down1">
                            <h6>Please fill in this form to create an account.</h6>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl6">
                            <i class="material-icons prefix darkBlue-text">account_circle</i>
                            <input id="full_name" type="text" name="name" value="<?= retain_input_value('name') ?>" class="validate">
                            <label for="full_name">Full Name</label>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl5 offset-xl1">
                            <i class="material-icons prefix darkBlue-text">phone</i>
                            <input id="tel" type="tel" name="phone" value="<?= retain_input_value('phone') ?>" class="validate">
                            <label for="tel">Phone</label>
                        </div>

                        <div class="col s12">
                            <div class="input-field col s12 offset-m2 m8 xl6">
                                <i class="material-icons prefix darkBlue-text">email</i>
                                <input id="email" type="email" name="email" value="<?= retain_input_value('email') ?>" class="validate">
                                <label for="email">Email</label>
                                <span class="helper-text" data-error="Invalid ❌" data-success="Valid ✔">example@gmail.com</span>
                            </div>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl6">
                            <i class="material-icons prefix darkBlue-text">lock</i>
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                            <span class="helper-text">Minimum of 8 characters long</span>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl5 offset-xl1">
                            <i class="material-icons prefix darkBlue-text">lock</i>
                            <input id="c_password" type="password" name="c_password" class="validate">
                            <label for="c_password">Confirm Password</label>
                        </div>

                        <div class="col s12 center-align margin-up">
                            <button type="submit" name="register" class="waves-effect btn-large transparent darkBlue-text bold rounded">Create
                                Account</button>
                        </div>
                    </div>

                    <?php
                    // Reset input value after user submits input
                    $_SESSION['data'] = null;
                    ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php
    require_once(APP_ROOT . DS . 'includes' . DS . 'scripts.php');
    ?>

    <!-- To display error on validation -->
    <?php
    if (isset($_SESSION['message'])) {

        toast($_SESSION['message'], 'red', '5000');
        $_SESSION['message'] = null;
        
    }
    ?>
</body>

</html>