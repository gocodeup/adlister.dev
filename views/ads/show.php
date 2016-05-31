<?php 

require_once __DIR__ . '/../../models/Ad.php';
require_once __DIR__ . '/../../utils/Input.php';

$id = Input::get('id');

$ad = Ad::find($id);

$user_id = $ad->attributes['user_id'];

$user = User::find($user_id);

?>

<div class="container">
<h1><?= $ad->attributes['title']; ?></h1>
    <div class="row">
        <div class="item">
            <div class="col-sm-6">
                <img src="<?= $ad->attributes['image_url']; ?>" class="img-responsive" alt="">
                <p><?= $ad->attributes['description']; ?></p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h2>Price: $<?= $ad->attributes['price']; ?></h2>
                    <h3>Location: <?= $user->attributes['location']; ?></h3>
                    <h3>Contact Information:</h3> 
                    <p><?= $user->attributes['email']; ?></p>
                </div>
            </div>
        </div><!-- end of class item -->
    </div><!-- end of main row -->
</div><!-- end of container -->

