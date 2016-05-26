<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Adlister Sign-Up</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Sign up for free!</h1>
        <form action="/" method="POST">
            <div class="form-group form-group-lg">
            <input type="text" class="form-control" placeholder="NAME" name="name"></div>
            <div class="form-group form-group-lg">
            <input type="email" class="form-control" placeholder="EMAIL" name="email"></div>
            <div class="form-group form-group-lg">
            <input type="password" class="form-control" placeholder="PASSWORD" name="password"></div>
            <div class="form-group form-group-lg">
            <input type="password" class="form-control" placeholder="CONFIRM PASSWORD" name="confirm"></div>
            <button type="submit" class="btn btbn-default" name="sumbit">Submit</button>
        </form>
    </div>

</body>
</html>