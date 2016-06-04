<?php
// Checks to see if user is logged in, If not it will
// reddirect to login.
if(!Auth::check()) {
    header('Location: /users/login');
    exit();
}
// If logged in and delete is pressed
// it will delete from database.
if(isset($_GET['id'])){
    $ads = Ads::find($_GET['id']);
    $ads->delete();
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

</head>
<body>
    <div class="valign-wrapper">
        <h3 class ="center-block">Your ad has been deleted.</h3>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
</body>
</html>
