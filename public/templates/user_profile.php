<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Seller's Profile</title>
    <?php require '../../views/partials/head.php'; ?>

    <link rel="stylesheet" type="text/css" href="../individual_item.css">
</head>
<body>
<header>
   <?php require '../../views/partials/navbar.php'; ?>
</header>

<div class="container"> 
    <h1>Profile Page</h1>

    <div class="col-sm-4 col-sm-offset-3 text-center">
        <h2>User Info</h2>
            
        <p>Name</p>
    
        <p>Email</p>

        <button class="btn btn-default" type="submit">Edit Profile</button>
    </div>

    <div class="col-sm-4 col-sm-offset-3 text-center">
        <h2>Your Ads</h2>
        <p>
            <a href="#">Ad 1</a>
        </p>
        <p>    
            <a href="#">Ad 2</a>
        </p>
        <p>    
            <a href="#">Ad 3</a>
        </p>
        <button class="btn btn-default" type="submit">Create Ad</button>
    </div>

</div>
<?php require '../../views/partials/common_js.php'; ?>
</body>
</html>