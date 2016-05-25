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

<style type="text/css">
body {
    margin: 0 40px;
}

.info {
    margin: 0 auto;
    width: 250px;
    background-color: #eeeeee;
}

.info p {
    margin: 0px 20px;
}
</style>
</head>
<body>
    <?php //require 'nav-bar'; ?>
    <div class="container">
        <div class="user-info section center-align">
            <h2>User Info</h2>

            <div class="info left-align">
                <div class="name">
                    <p>Name: Johnny Sellsit</p>
                </div>

                <div class="email">
                    <p>Email: jsellsit@gmail.com</p>
                </div>
            </div>
            <button class="edit-profile btn">Edit Profile</button>
        </div><!-- End of user-info -->

        <div class="user-ads section center-align">
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
            <button class="create-ad btn">Create Ad</button>
        </div><!-- End of user-ads -->
    </div><!-- End of container -->

    <?php //require 'js-files'; ?>
</body>
</html>
