<?php
// require_once __DIR__  .  '/../database/db_connect.php';
require_once __DIR__ . '/../bootstrap.php';
require_once '../models/User.php';

$user =User::findByUsernameOrEmail($_SESSION['IS_LOGGED_IN']);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Account Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/menu.css">
       <link rel="stylesheet" href="css/main.css">
       <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    </head>
    <body>
            <h1> Account Settings </h1>
            <?php include 'assets/menu.php';?>
            <!-- menu panel -->
            <div id="content">
               <div class="menu-trigger"></div>
               <!-- header panel -->
               <?php include 'assets/header.php';?>
               <!-- Content panel -->
                   <?php include_once 'assets/menu.php' ?>
        <div class="container">
            <h4> User Id <?=$user->user_id; ?></h4>
            <h4> User Name <?=$user->username; ?></h4>
            <h4> Email <?=$user->email; ?><h4>
            <form method="POST" action>
                <label for "username">User Name</label>
                <input id="username" type="text" name="username">
                <a class="btn-btn-primary" href="/edit.php" > Edit Account </a>

                <?php $ads = Ads::findAdsbyAccount($_SESSION['LOGGED_IN_ID']); $i=0; ?>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/menu.js"></script>
            </script>
        </body>
</html>
