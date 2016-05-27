<!DOCTYPE html>
<html>
<head>
    <title>Edit Your Ad</title>
    <?php require '../../views/partials/head.php'; ?>
</head>
<body>
<header>
   <?php require '../../views/partials/navbar.php'; ?>
</header>

<div class="container">
<h1>Edit My Ad</h1>
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form class="text-center">
                <div class="form-group">
                    <label for="itemname">Name</label>
                    <input type="text" class="form-control" placeholder="Item Name">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="5" placeholder="Describe your item"></textarea>
                </div>
                <div class="form-group text-left">
                    <label for="itemPicture">Add Picture</label>
                    <input type="file" id="itemPicture">
                </div>
              <button type="submit" class="btn btn-default">Submit Changes</button>
            </form>
        </div>
    </div>

</div>
<?php require '../../views/partials/common_js.php'; ?>


</body>
</html>