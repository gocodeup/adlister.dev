<?php
    require_once __DIR__ . '/../../database/db_connect.php';
    require_once "/../../utils/Input.php";
    require_once"../../utils/Auth.php";
    require_once __DIR__ . '/../utils/helper_functions.php';

 ?>

 <!DOCTYPE html>
 <html>
     <head>
         <title>Login Page</title>
         <link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
     </head>
     <body>
        <div class="container">
            <section id="login">
                <div class="row">
                    <h1 class="section-title">Login To Antiquitas Lost </h1>
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
                    <div class="col-md-6 col-md-offset-3">
                        <p>Login with your email/username and password</p>
                        <form method="POST" action="" data-validation data-required-message="This field is required">
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">Login</button>
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
