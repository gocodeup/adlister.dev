<html>
<head>
<?php require 'temp-head.php'; ?>

    <title>Login Page</title>
</head>
<body>
  <?php require "temp-navbar.php"; ?>
<center>Login Page</center>
<div class="row">
    <div class="col s12 m6 l4 offset-m3 offset-l4">
        <form class="col s12">
          <div class="row">
            <div class="input-field">
              <input placeholder="Username" id="userName" type="text" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Password" id="password" type="password" class="validate">
            </div>
          </div>
          <div class="row">
            <div class="col s12 m8 l4 offset-m2 offset-l4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
            </div>
          </div>
        </form>
    </div>
</div>
    <?php require 'temp-foot.php'; ?>

</body>
</html>
