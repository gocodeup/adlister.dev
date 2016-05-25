<!--Page that includes the form to edit an existing ad-->


<?php

session_start();

// Uncomment in order to link necessary materialize css and javascript in later version.
// require '/css.css';
// require_once __DIR__ . '/../bootstrap.php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Ad</title>

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

</head>
<body class = "container">

<!-- <php require __DIR__ . '/navbar.php'; ?> -->
<!-- <php require __DIR__ . '/common_js.php'; ?> -->

<h1> Edit Ad Listing <?php ?> </h1>

<!-- Form to submit new Ad using POST method -->
<div class="row">

    <form method="POST" action="index.php" class="col s12">

        <div class = "row">
            <div class="input-field col s6">
              <input placeholder="Ad/Item Name" id="ad_item_name" type="text" class="validate" name="item_name" data-required>
            </div>
            <div class="input-field col s6">
              <input placeholder="Item Price" id="item_price" type="text" class="validate" name="item_price" data-required>
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
                <textarea type="textarea" class="materialize-textarea" id="textarea" name="textarea" data-required> </textarea>
                <label for="textarea">Ad/Item Description</label>
            </div>
        </div>
<!-- Form to submit an image  -->
        <div>     
            <form method="POST" action="">
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" name="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
            </form>
        </div>
<!-- submits all forms, uses field actions taking user to ad index -->
        <div class="row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Submit Edited Ad</button>

            </div>
        </div>
    </form>
</div> 

<!-- <php require __DIR__ . '/footer.php'; ?> -->
</body>
</html>


