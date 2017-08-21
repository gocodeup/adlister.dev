<?php
require_once __DIR__ . '/../../database/db_connect.php';
require_once "../../utils/Input.php";
require_once "../../utils/Auth.php";
require_once __DIR__ . ' /../../utils/helper_functions.php';

 function pageController()
{
    $data = [];


    // return findByUsernameOrEmail($usernameOrEmail);
}
extract(pageController());
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Account Page</title>
        <!--Partial for head.  Good place to include things like css files.-->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <h1> Account Settings </h1>
        <!--partial view for navbar-->

        <div class="container">
            <h4> User Id <?=$user->user_id; ?>/h4>
            <h4> User Name <?=$user->username; ?>/h4>
            <h4> Email <?=$user->email; ?>h4>
            <form method="POST">

                <label for "username">User Name</label>
                <input id="username" type="text" name="username">
                <a class="btn-btn-primary" href="/edit.php" > Edit Account </a>
            </form>
        </div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
            <script src="js/main.js">
            </script>
        </body>
</html>
