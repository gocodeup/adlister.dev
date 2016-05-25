<?php
require_once "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
             
</head>
<body>

<div class="container">
    <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input placeholder="Placeholder" id="first_name" type="text" class="validate">
              <label for="first_name">Name</label>
            </div>
            <!-- <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div> -->
          </div>
         <!--  <div class="row">
            <div class="input-field col s12">
              <input disabled value="I am not editable" id="disabled" type="text" class="validate">
              <label for="disabled">Disabled</label>
            </div>
          </div> -->
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Confirm Password</label>
            </div>
          </div>
          <div class="center-align">
            <a class="waves-effect waves-light btn-large">Create Account</a>
          </div>
        </form>
        <p>By creating account you agree to adlisters terms and conditions</p>
        <p>Already have an account?<a href="">Sign in</a></p>
    </div>
</div>



<!-- 
<div class="container">
    <div class="row">
        <form class="col s12">
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Your Name" id="first_name" type="text" class="validate">
                    <label for="first_name">Your Name</label>
                </div>
            <div class="row">
                <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
        <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Confirm Password</label>
        </div>
      </div>
    </form>
  </div>
</div>
 -->



</body>
</html>