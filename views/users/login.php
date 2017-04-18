<?php

// remove Auth::logout() to never show this page if logged in
Auth::logout();

if(isset($_SESSION['LOGGED_IN_ID'])) {
    header("Location: /");
}

if(isset($_POST['submit'])) {
    $authorize = new Auth();
    $errors = [];

    try {
        $validated = $authorize::attempt($_POST['username'], $_POST['password']);
    } catch (Exception $e) {
        $errors['error'] = $e->getMessage();
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Adlister Home</title>
    <meta charset="utf-8">  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/WebDEVPhillip.css">    
</head>
<body>
    <div class="container">

        <section id="login">

            <div class="row">

                <h1 class="section-title"><center>Login To OooLister</center></h1>

                <div class="col-md-6 col-md-offset-3">

                    <p style="text-align: center;">Login with your email/username and password</p>

                    <form method="POST" action="" data-validation data-required-message="This field is required">

                        <div class="form-group">
                        <?php
                        if(isset($_POST['submit'])) {
                            if(empty($errors)) {
                                header("Location: /");
                            } else {
                                echo '<div class="alert alert-danger"><p class="error">' . $errors['error'] . '</p></div>';
                            }
                        }
                        ?>
                            <input type="text" class="form-control" id="email_user" name="username" placeholder="Username" data-required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="/signup" class="btn btn-success">Go To Signup</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
