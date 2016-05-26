<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Create a New Ad</title>
    <?php require '../../views/partials/head.php'; ?>
</head>
<body>
<header>
   <?php require '../../views/partials/navbar.php'; ?>
</header>
<div class="container"> 
    <h1>Create a New Ad</h1>
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <form action="demo_post_enctype.asp" method="post" enctype="multipart/form-data"class="text-center">
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
                <input class="btn btn-default" type="submit" value="Make My Ad">
            </form>

        </div>
    </div>

</div>
<?php require '../../views/partials/common_js.php'; ?>
</body>
</html>