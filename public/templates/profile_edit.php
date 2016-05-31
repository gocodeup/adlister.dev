<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
    <?php require '../../views/partials/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<header>
   <?php require '../../views/partials/navbar.php'; ?>
</header>

<div class="container"> 

    <h1>Edit Profile</h1>
    <div class="col-sm-4 col-sm-offset-3 col-md-6 col-md-offset-3 text-center">
        <form class="form-horizontal">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="user_name" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="userLocation" class="col-sm-2 control-label">Location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputLocation" placeholder="Location">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default btn-info">Submit Changes</button>
            </div>
        </div>
        </form>
    </div>

</div>
<?php require '../../views/partials/common_js.php'; ?>
</body>
</html>