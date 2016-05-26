<!--Page for an index of advertisements-->
<?php

require __DIR__ . '/../../models/Ad.php';

$ads = Ad::all();

?>

<div class="container text-center">
  <div>
    <h1>All Items</h1>
  </div> 

  <?php foreach($ads as $ad):?>
  <div class="thumbnail col-sm-3">
    <img src="<?= $ad['image_url']; ?>">
    <div class="caption">
      <h3><?= $ad['title'];?></h3>
      <p><?= $ad['price'];?></p>
      <p><?= $ad['description'];?></p>
  <?php endforeach; ?>

  <p>
      <a href="#" class="btn btn-primary" role="button">View</a>
  </p> 
</div>
  