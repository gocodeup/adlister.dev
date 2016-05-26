<?php
require_once "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
             
</head>
<body>
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title">Signup For Adlister</h1>
            <div class="col-md-6 col-md-offset-3">
                <p>Please fill out the information below so we can create your account.</p>
                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                    <div class="alert alert-danger">
                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                    <div class="alert alert-success">
                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                <?php endif; ?>


                <form method="POST" action="" data-validation data-required-message="This field is required">

                <div class="container">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Name" id="name" type="text" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Email" id="email" type="email" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Username" id="username" type="text" class="validate">
                                </div>
                            </div>    
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Password" id="password" type="password" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Confirm Password" id="password" type="password" class="validate">
                                    <!-- <label for="password">Confirm Password</label> -->
                                </div>
                            </div>
                            <div class="center-align">
                                <a class="waves-effect waves-light btn-large">Create Account</a>
                            </div>
                    </form>
                        <p>By creating account you agree to adlisters terms and conditions</p>
                        <p>Already have an account?<a href="">Sign in</a></p>
                </form>
            </div>
        </div>
    </section>
</div>
</body>
</html>