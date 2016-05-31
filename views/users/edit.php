<?php
//this is starting the session
// session_start();
// edit these once it's merged correctly
// require_once "../models/User.php";
// require_once "../utils/Auth.php";
// require_once "../utils/Input.php";

if(!Auth::check()) {
    var_dump("You are not logged in!!!");
}

if(isset($_POST['name'])){ 
    $user = User::find($_SESSION['LOGGED_IN_ID']);
    $user->name = Input::get('name');
    $user->username = Input::get('username');
    $user->email = Input::get('email');
    $user->save();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
      
</head>
<body>


<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Edit Account</h1>

            <div class="col-md-6 col-md-offset-3">

                <p>Please fill out the information below so we can update your account.</p>
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

                <!-- the action will redirect to the user account -->
                <form method="POST" action="/">
                    <div class="container">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Full Name" id="name" type="text" name="name"  class="validate">
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

                             <div class="center-align">
                                <input type="submit" class="waves-effect waves-light btn-large" value="Update Account">
                               <!--  <a class="waves-effect waves-light btn-large">Create Account</a> -->
                            </div>

                        </form>
                    </div>
            </div>

    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>