<?php
//this is starting the session
session_start();
// edit these once it's merged correctly

require_once "navbar.php";
require_once "../../utils/Auth.php";
require_once "../../utils/Input.php";
require_once "../../models/User.php";

if (Auth::check()) {
    header('Location: template/template.php');
    exit();
  }

if (!Auth::attempt(Input::get('username'), Input::get('password') )) {
    if($_POST){
    echo "Incorrect username or password";
    }
}else{
    //once the login is correct will direct user to main page
    header('Location: /template/template.php');
    exit();
}





?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script> -->
             
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
    <!-- input correct site once logged in -->
                <form method="POST" action="users-login.php">
                    <div class="container">
                        <div class="row">
                        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Email/Username" id="username" name="username" type="text" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Password" id="password" name="password" type="password" class="validate" required>
                                    </div>
                                </div>
                                <div class="center-align">
                                    <input type="submit" class="waves-effect waves-light btn-large" value="Log in">
                                </div>
                    
                        </div>
                        <p>New to adlister? <a href="/template/users-signup.php">Create account</a></p>
                    </div>
                </form>
            </div>
        </div>
  </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</div>
</body>
</html>
