<?php
require_once __DIR__ . '/../../utils/Auth.php';
if(Input::has('username')) { 
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(Auth::attempt($username, $password)) {
    header ('Location: index.php');
    exit();
  }
}
?>

<!-- Bootstrap CSS cdn-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- external css -->
<link rel="stylesheet" href="/css/main.css">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://adlister.dev/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/ads.index.php">Ads <span class="sr-only">(current)</span></a></li>

        <!-- These buttons only show if the user is logged IN -->
        <?php if (isset($_SESSION['IS_LOGGED_IN'])){ ?>
          <li><a href="#">Account</a></li>
          <li><a href="/ads.create.php">Post Ad</a></li>   
        <?php } ?> 
        
<!--         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
<!--       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
      <!-- Login & Signup Buttons -->
       <div class="nav-menu btn-group pull-right" role="group">

        <!-- These buttons only show if the user is logged IN -->
        <?php if (isset($_SESSION['IS_LOGGED_IN'])){ ?>
        <a href="auth.logout.php" type="button" class="btn btn-default" id="logout-button">Logout</a>
        <a href="#" type="button" class="btn btn-default" id="profile-button">Profile</a>
        <?php } else { ?>

        <!-- These buttons only show if the user is logged OUT -->
        <button type="button" class="btn btn-default" id="login-button" data-toggle="modal" data-target=".login-modal">Login</button>
        <button type="button" class="btn btn-default" id="signup-button" data-toggle="modal" data-target=".signup-modal">Sign Up</button>
        <?php }?>
      </div>

      <!-- Login modal -->
      <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="mySmallModalLabel">Welcome back!</h4>
              <form method="POST">
                <div id="loginEmailField" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="username" class="sr-only">Username</label>
                  <input name="username" id="username" type="text" class="form-control" placeholder="Username">
                </div>
                <div id="loginPasswordField" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="password" class="sr-only">Password</label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div id="emailLoginBtnDiv" class="form-group col-sm-10 col-sm-offset-1 text-center">
                    <button id="loginWithEmailBtn" type="submit" class="btn btn-primary btn-block">CLICK TO LOG IN</button>
                </div>
              </form>
              <div class="text-center">
                  <a href="#" id="forgotPasswordLink">Forgot your password?</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Signup modal -->
      <div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title text-center" id="mySmallModalLabel">Let's Get Started!</h4>
              
              <div id="signupNameField" class="form-group col-sm-10 col-sm-offset-1">
                <label for="signupNameField" class="sr-only">Name</label>
                <input id="signupNameField" type="text" class="form-control" name="title" maxlength="50" placeholder="Your Name" required>
              </div>
              <div id="signupEmailField" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="signupEmailField" class="sr-only">E-Mail</label>
                  <input id="signupEmailField" type="text" class="form-control" name="title" maxlength="50" placeholder="Your E-Mail"required>
              </div>
              <div id="signupUsernameField" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="signupUsernameField" class="sr-only">Username</label>
                  <input id="signupUsernameField" type="text" class="form-control" name="title" maxlength="20" placeholder="Create a Username" required>
              </div>
              <div id="signupPasswordField" class="form-group col-sm-10 col-sm-offset-1">
                <label for="signupPasswordField" class="sr-only">Password</label>
                <input id="signupPasswordField" type="password" class="form-control" name="title" maxlength="20" placeholder="Create a Password" required>
            </div>

            <div id="signupConfirmField" class="form-group col-sm-10 col-sm-offset-1">
                <label for="signupConfirmField" class="sr-only">Confirm Password</label>
                <input id="signupConfirmField" type="password" class="form-control" name="title" maxlength="20" placeholder="Confirm Password"required>
            </div>
            <div id="emailsignupBtnDiv" class="form-group col-sm-10 col-sm-offset-1 text-center">
                <button type="submit" class="btn btn-primary btn-block">CLICK TO SIGN UP</button>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>