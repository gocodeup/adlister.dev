<?php 

require_once __DIR__ . "../../../models/Ad.php";
require_once __DIR__ . "../../../utils/helper_functions.php";
require_once __DIR__ . "../../../utils/Input.php";


    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        $ad = new Ad;
        $ad->title = Input::get('title');
        $ad->price = Input::get('price');
        $ad->description = Input::get('description');
        $ad->image_url = saveUploadedImage('img_url');
        $ad->user_id = $_SESSION['LOGGED_IN_ID'];
        $ad->save();
        var_dump($ad);
    }

?>

<div class="container"> 
    <h1>Create a New Ad</h1>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <form method="post" enctype="multipart/form-data" class="text-center">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" id="title" type="text" class="form-control" placeholder="Item Name">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input name="price" id="price" type="number" min="0" step="0.01" class="form-control" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Describe your item"></textarea>
                </div>

                <div class="form-group text-left">
                    <label for="img_url">Add Picture</label>
                    <input type="file" name="img_url" id="img_url">
                </div>
              <button type="submit" class="btn btn-default">Make My Ad</button>
            </form>
        </div>
    </div>

</div>