<!--Page for an index of advertisements-->
<?php

$ads = Ad:all();

?>

<div class="container text-center">

  <div>
    <h1>All Items</h1>
  </div> 

  <div class="row">
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="<?= $ad['image_url']; ?>">
        <div class="caption">

        <?php foreach($ads as $ad):?>
          <h3><?= $ad['title']?></h3>
          <p><?= $ad['price']?></p>
          <p><?= $ad['description']?></p>
        <?endforeach?>

          <p>
              <a href="#" class="btn btn-primary" role="button">View</a>
          </p>    
        </div>
      </div>
    </div> 
  </div>
</div>