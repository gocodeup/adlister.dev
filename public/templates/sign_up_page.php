<?php  


?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    
    <?php require_once '../../views/partials/head.php';?>
    <?php require_once '../../views/partials/navbar.php';?>
    <link rel="stylesheet" type="text/css" href="/individual_item.css">
   
</head>
<body>
<div class="container">
<div class="col-md-8">
<h1>New User Sign Up</h1>
<form>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="exampleName" placeholder="Name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Re-enter Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</body>
</html>