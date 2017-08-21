<?php
require_once "/../db_connect.php"
require_once "/../Input.php";
require_once"/../Auth.php";


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

                    <h1 class="section-title">Edit Account</h1>

                    <div class="col-md-6 col-md-offset-3">

                        <p>Please fill out the information below so we can update your account.</p>
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
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Account</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
