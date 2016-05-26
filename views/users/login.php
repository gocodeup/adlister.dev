<html>
<head>
<?php require 'temp-head.php'; ?>

    <title>Login Page</title>
</head>
<body>
  <?php require "temp-navbar.php"; ?>
<h1 class="section-title">Login To adLister</h1>
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


<div class="row">
    <div class="col s12 m6 l4 offset-m3 offset-l4">
        <form method="POST" action="" data-validation data-required-message="This field is required">
          <div class="row">
            <div class="input-field">
              <input placeholder="Username" id="userName" type="text" class="validate" data-required>
            </div>
          </div>
          <div class="row">
            <div class="input-field">
              <input placeholder="Password" id="password" type="password" class="validate" data-required>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m8 l4 offset-m2 offset-l4">
              <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
<!-- link needs to be added here to create user signup page -->
              <a href="/signup" class="btn btn-success">Go To Signup</a>
            </div>
          </div>
        </form>
    </div>
</div>
    <?php require 'temp-foot.php'; ?>

</body>
</html>

