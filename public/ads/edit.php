<?php

 
require_once __DIR__ . "../../../bootstrap.php";

function editAd()
{
	
}


?>
<!DOCTYPE html>
<html>
   <head>
      <title>Edit Listing</title>
			<meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../css/menu.css">
      <link rel="stylesheet" type="text/css" href="../css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>
	 <body>
      <?php include '../assets/menu.php';?>
      <!-- menu panel -->
      <div id="content">
         <div class="menu-trigger"></div>
         <!-- header panel -->
         <?php include '../assets/header.php';?>
         <!-- Content panel -->

         <div class="container center-div">
					 <h1>Edit ad</h1>
					 <section id="login">
               <div class="row">
            <form method="POST" action="" enctype="multipart/form-data">
               <div class="name">
                  <label for="name">Name:</label>
                  <input type="text" name="name"></input>
               </div>
               <div class="form-group">
                  <label for="category">Category:</label>
                  <input type="text" name="category"></input>
               </div>
               <div class="form-group">
                  <label for="sub_category">Sub-Category:</label>
                  <input type="text" name="sub_category"></input>
               </div>
               <div class="form-group">
                  <label for="price">Price:</label>
                  <input type="text" name="price"></input>
               </div>
               <div class="form-group">
                  <label for="description">Description:</label>
                  <textarea name="description" cols="40" rows="4"></textarea>
               </div>
               <div class="form-group">
                  <label for="pick_up_location">Pick Up Location:</label>
                  <input type="text" name="pick_up_location"></input>
               </div>
               <div class="form-group">
                  <label for="location_city">Location City:</label>
                  <input type="text" name="location_city"></input>
               </div>
               <div class="form-group">
                  <label for="image">Image:</label>
                  <input type="file" name="image"></input>
               </div>
               <div class="row">
                  <div class="col-sm-6 text-right">
                     <button type="submit" class="btn btn-primary">Submit changes</button>
                  </div>
               </div>
            </form>
         </div>
				 </section>
				   </div>
         <?php include '../assets/footer.php' ?>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="../js/main.js"></script>
      <script type="text/javascript" src="../js/menu.js"></script>
   </body>
</html>
