<?php

require_once __DIR__ . '/../../models/Ad.php';
require_once __DIR__ . '/../../utils/Auth.php';



$ad = Ad::find(Input::get('id'));
if(!empty($_POST)) {
    $ad->title = Input::get('title');
    $ad->price = Input::get('price');
    $ad->description = Input::get('description');
    $ad->image_url = Input::get('image_url');
    $ad->save();
    header("Location: /account");
}

?>

<div class="container">
<h1>Edit My Ad</h1>
    <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
        <div class="alert alert-danger">
            <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
        </div>
        <?php unset($_SESSION['ERROR_MESSAGE']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
        <div class="alert alert-success">
            <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
        </div>
        <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form class="text-center" method="POST">
                <div class="form-group">
                    <label for="itemname">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $ad->title; ?>">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" class="form-control" value="<?= $ad->price; ?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="5"><?= $ad->description; ?></textarea>
                </div>
                <div class="form-group">
                    <img src="<?= $ad->image_url; ?>">
                </div>
                <div class="form-group text-left">
                    <label for="itemPicture">Change Picture</label>
                    <input name="image_url" type="file" id="itemPicture">
                </div>
              <button type="submit" class="btn btn-default">Submit Changes</button>
            </form>
        </div>
    </div>
</div>
