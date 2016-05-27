<!--Page for an index of advertisements-->
<?php

require __DIR__ . '/../../models/Ad.php';

$ads = Ad::all();

  
     
          $ad = new Ad;
          
          $ad->img_url = Input::get('img_url');
          $ad->title = Input::get('title');
          $ad->price = Input::get('price');
          $ad->description = Input::get('description');
     

?>

<div class="container text-center">
  <div>
    <h1>All Items</h1>
  </div> 

  <?php foreach($ads as $ad) : ?>
  <div class="thumbnail col-sm-3">
    <img src="<?= $ad['image_url']; ?>">
    <div class="caption">
      <h3><?= $ad['title']; ?></h3>
      <p><?= $ad['price']; ?></p>
      <p><?= $ad['description']; ?></p>
  <?php endforeach; ?>

  <p>
      <a href="#" class="btn btn-primary" role="button">View</a>
  </p> 
</div>
  