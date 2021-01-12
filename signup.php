<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" sizes="32x32" href="<?= ROOT ?>images/favicon.jpg">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?= ROOT ?>css/materialize.min.css">
    <link rel="stylesheet" href="<?= ROOT ?>css/style.css">
    <title>SayHi - Create Account</title>
</head>

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
                    <li><a href="login.php"
                            class="waves-effect waves-light btn white darkBlue-text rounded bold lr-padding">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="home.php"
                class="waves-effect waves-light btn darkBlue-text white rounded bold lr-padding">Home</a>
        </li>
        <li><a href="login.php"
                class="waves-effect waves-light btn darkBlue-text white rounded bold lr-padding">Login</a></li>
    </ul>

    <!-- Sign Up Form -->
    <div class="form-container">
        <div class="container">
            <div class="row">
                <form class="col offset-s1 s10 m12">
                    <div class="row">
                        <div class="col s12 center-align margin-up">
                            <img src="<?ROOT?>images/smileymark.png" class="form-logo" alt="">
                        </div>

                        <div class="col s12 center-align margin-down1">
                            <h6>Please fill in this form to create an account.</h6>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl5">
                            <i class="material-icons prefix darkBlue-text">account_circle</i>
                            <input id="full_name" type="text" class="validate">
                            <label for="full_name">Full Name</label>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl6 offset-xl1">
                            <i class="material-icons prefix darkBlue-text">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                            <span class="helper-text" data-error="wrong" data-success="right">example@gmail.com</span>
                        </div>
                        
                        <div class="input-field col s12 offset-m2 m8 xl5">
                            <i class="material-icons prefix darkBlue-text">phone</i>
                            <input id="tel" type="tel" class="validate">
                            <label for="tel">Phone</label>
                        </div>

                        <div class="input-field col s12 offset-m2 m8 xl6 offset-xl1">
                            <i class="material-icons prefix darkBlue-text">lock</i>
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>

                        <div class="col s12 center-align margin-up">
                            <a href="login.php"
                                class="waves-effect btn-large transparent darkBlue-text bold rounded">Create
                                Account</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Scripts -->
    <script src="<?ROOT?>js/jquery-min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
    <script src="<?=ROOT?>js/materialize.min.js"></script>
    <script src="<?=ROOT?>js/main.js"></script>

</body>

</html>