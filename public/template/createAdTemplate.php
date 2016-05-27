<!--Page for creating new advertisement listings-->

<?php

session_start();

// Uncomment in order to link necessary materialize css and javascript in later version.
// require '/css.css';
require_once __DIR__ . '/../../bootstrap.php';
// require_once '../../utils/helper_functions.php';

if(isset($_POST['ad_name'])){ 
    $ads = new Ads();
    $ads->ad_name = $_POST['ad_name'];
    $ads->ad_description = $_POST['description'];
    $ads->price = $_POST['price'];
    $ads->phone = $_POST['phone'];
    $ads->email = $_POST['email'];
    $ads->location = $_POST['location'];
    $ads->img_url = saveUploadedImage('img_url');
    $ads->save();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Ad</title>

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

</head>

 <?php require __DIR__ . '/navbar.php'; ?>

<body>

<!-- <php require __DIR__ . '/common_js.php'; ?> -->

<!-- Form to submit new Ad using POST method -->



<div class="container">
  <h1> Create an Ad Listing </h1>


  <div class="row">

      <form method="POST" action="/template/createAdTemplate.php" class="col s12" enctype="multipart/form-data">

          <div class = "row">
              <div class="input-field col s6">
                <input placeholder="Ad/Item Name" id="ad_name" type="text" class="validate" name="ad_name" data-required>
              </div>
              <div class="input-field col s6">
                <input placeholder="Item Price" id="price" type="text" class="validate" name="price" data-required>
              </div>
          </div>
          <div class = "row">
              <div class="input-field col s6">
                <input placeholder="Contact Email" id="email" type="email" class="validate" name="email" data-required>
              </div>
              <div class="input-field col s6">
                <input placeholder="Contact Phone" id="phone" type="text" class="validate" name="phone" data-required>
              </div>
              <div class="input-field col s12">
                <input placeholder="Location" id="location" type="text" class="validate" name="location" data-required>
              </div>
              <div class="input-field col s12">
                  <textarea type="textarea" class="materialize-textarea" id="textarea" name="description" data-required> </textarea>
                  <label for="textarea">Ad/Item Description</label>
              </div>
          </div>
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="img_url">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" name="">
                </div>
              </div>
          </div>
          <button class="btn waves-effect waves-light" type="submit">Submit
          </button>
      </form>
  </div>
<!-- Form to submit an image  -->


<!-- <php require __DIR__ . '/footer.php'; ?> -->
  <!-- Compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</body>
</html>

