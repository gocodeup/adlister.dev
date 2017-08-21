<?php
	session_start();
   require_once __DIR__ .  '/../database/db_connect.php';
   require_once "../utils/Input.php";
   require_once "../utils/Auth.php";
   require_once __DIR__ . " /../utils/helper_functions.php";

   function attempt($usernameOrEmail)
    {
        // makes sure the values passed in are not empty
        if(($username == '' || $username == null) || ($password == '' || $password == null)) {
            $_SESSION['ERROR_MESSAGE'] = 'Login information was incorrect';
            return false;
        }
        // gets instance of user model by searching with username or email($username)
        $user = User::findByUsernameOrEmail($usernameOrEmail);

        // makes sure the instance returned is not empty
        if ($user == null) {
            $_SESSION['ERROR_MESSAGE'] = 'Login information isincorrect';
            return false;
        }
        // checks password submitted against hashed password
        if (password_verify($password, $user->password)) {
            // sets session variables used for logged in user
            $_SESSION['IS_LOGGED_IN'] = $user->username;
            $_SESSION['LOG_IN_EMAIL'] = $user->email;
            $_SESSION['LOGGED_IN_ID'] = $user->id;
            header("Location: /account.php");
            die();
            return true;
        }

        $_SESSION['ERROR_MESSAGE'] = 'Login information is incorrect';
        return false;
    }

    ?>

<!DOCTYPE html>
<html>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/menu.css">
      <link rel="stylesheet" href="css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
   </head>
   <body>
      <?php include 'assets/menu.php';?>
      <!-- menu panel -->
      <div id="content">
         <div class="menu-trigger"></div>
         <?php include 'assets/header.php' ?>
         <div class="container center-div">
            <h1 class="section-title">Login To Iron List </h1>
            <section id="login">
               <div class="row">
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
                  <!-- <div class="col-md-6 col-md-offset-3"> -->
                  <div class="center-div">
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

      </div>
<?php include 'assets/footer.php' ?>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/menu.js"></script>
   </body>
</html>
