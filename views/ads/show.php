<?php 

require_once __DIR__ . '/../../models/Ad.php';
require_once __DIR__ . '/../../utils/Input.php';

$id = Input::get('id');

$ad = Ad::find($id);

$user_id = $ad->attributes['user_id'];

$user = User::find($user_id);


?>
<!--Page for single advertisement -->
<div class="container">
<h1>Individual Items Page</h1>
    <div class="row">

        <div class="col-sm-6">
            <div class="thumbnail">
                <img src="<?= $ad->attributes['image_url']; ?>" class="img-responsive" alt="">
                <div class="caption">
                    <h3><?= $ad->attributes['title']; ?></h3>
                    <p><?= $ad->attributes['description']; ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h1>Price: $<?= $ad->attributes['price']; ?></h1>
                <h3>Contact Information:</h3> 
                    <p><?= $user->attributes['email']; ?></p>
                    <div>
 <!--                        <a href="">Posted BY USER</a> -->
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <a href="#" class="btn btn-primary" role="button">Edit Ad</a>
                </div>
                <div class="col-sm-1">
                    <a href="#" class="btn btn-primary" role="button">Delete Ad</a>
                </div>
            </div>  
        </div>
    </div>
</div>

