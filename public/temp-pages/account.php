<!--Page for user account home-->
<?php


?>
<html>
<head>
    <title>account</title>
    <?php //require 'header.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


</head>
<body>
    <?php //require 'nav-bar'; ?>
    <div>
        <h1>My Account</h1>
    </div>

    <div class="user-info">
        <h2>User Info</h2>
        <div class="info">
            <div class="name">
                <p>Name: Johnny Sellsit</p>
            </div>

            <div class="email">
                <p>Email: jsellsit@gmail.com</p>
            </div>
      </div>
      <button class="edit-profile">Edit Profile</button>
    </div>

    <div class="user-ads">
        <h2>Your Ads</h2>
        <div class="info">
            <div class="ad-title">
                <p>Ad 1</p>
            </div>

            <div class="ad-title">
                <p>Ad 2</p>
            </div>

            <div class="ad-title">
              <p>Ad 3</p>
            </div>
        </div>
        <button class="create-ad">Create Ad</button>
    </div>

    <?php //require 'js-files'; ?>
</body>
</html>
