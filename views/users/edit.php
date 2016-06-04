<?php
// checks if user is logged in. If not it will
// redirect.
if(!Auth::check()) {
    header('Location: /users/login');
    exit();
}
// finds user and allows updates to happen if POST data
// is found on the page.
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
                <!-- This is the error messages -->
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

                <!-- the form will redirect home if filled out correctly -->
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
