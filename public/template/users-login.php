<?php
//this is starting the session
session_start();
require_once "navbar.php";
require_once "../../utils/Auth.php";
require_once "../../utils/Input.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
             
</head>
<body>

<div class="container">
  <section id="login">
    <div class="row">
        <h1 class="section-title">Login To Adlister</h1>
            <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                <!-- <div class="alert alert-danger"> -->
                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                <!-- </div> -->
                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                <!-- <div class="alert alert-success"> -->
                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                <!-- </div> -->
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>

        <div class="col-md-6 col-md-offset-3">
            <p>Login with your email/userame and password</p>
                <form method="POST" action="" data-validation data-required-message="This field is required">
                    <div class="container">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Email/Username" id="email" type="email" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Password" id="password" type="password" class="validate">
                                    </div>
                                </div>
                                <div class="center-align">
                                    <a class="waves-effect waves-light btn-large">Log in</a>
                                </div>
                            </form>
                            <p>New to adlister? <a href="">Create account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
  </section>
</div>
</body>
</html>
