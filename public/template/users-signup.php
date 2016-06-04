<?php
require_once "../../models/User.php";
session_start();

// var_dump($_POST);


if(isset($_POST['name'])){ 
    $user = new User();
    $user->name = $_POST['name'];
    $user->username = $_POST['username'];
    $user->email = $_POST['email'];
    if($_POST['passwordValidate'] == $_POST['password']){
        $user->password = $_POST['password'];
    }
    $user->save();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
</head>
<body>
<div class="container">
    <section id="login">
        <div class="row">
            <h1 class="section-title">Signup For Adlister</h1>
            <div class="col-md-6 col-md-offset-3">
                <p>Please fill out the information below so we can create your account.</p>
                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                    <!-- <div class="alert alert-danger"> -->
                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                    <!-- <div class="alert alert-success"> -->
                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                <?php endif; ?>

<!-- edit the action -->
                <form method="POST" action="/template/users-signup.php" >
                <div class="container">
                    <div class="row">
                        
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Name" id="name" type="text"  name="name"class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Email" id="email" type="email" name="email" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Username" id="username" type="text" name="username" class="validate">
                                </div>
                            </div>    
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Password" id="password" type="password" name="password" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Confirm Password" id="passwordValidate" type="password" name="passwordValidate" class="validate">
                                    <!-- <label for="password">Confirm Password</label> -->
                                </div>
                            </div>
                            <div class="center-align">
                                <input type="submit" class="waves-effect waves-light btn-large" value="create account">
                               <!--  <a class="waves-effect waves-light btn-large">Create Account</a> -->
                            </div>
                
                        <p>By creating account you agree to adlisters terms and conditions</p>
                        <p>Already have an account?<a href="">Sign in</a></p>
                </form>
            </div>
        </div>
    </section>
</div>

  <!-- Compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>