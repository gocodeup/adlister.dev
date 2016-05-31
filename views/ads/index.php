<!--Page for an index of advertisements-->
<?php

require __DIR__ . '/../../models/Ad.php';
require __DIR__ . '/../../database/db_connect.php';

$page = Input::has('page') ? Input::get('page') : 1;

$pagination = Ad::pagination($dbc, $page);

$stmt = $dbc->prepare('SELECT COUNT(*) FROM ads');
$stmt->execute();
$count = $stmt->fetchColumn();
$totalPages = ceil($count/8);

?>

<div class="container text-center">
  <div>
    <h1 class="text-left">All Items</h1>
  </div>

  <div class="row text-right pagination-bar">
    <div class="col-sm-2">
      <?php if($page > 1): ?> 
          <a href="/ads" class="btn btn-default">First</a>
      <?php endif; ?>
    </div>

    <div class="col-sm-2">
      <?php if($page >= 2): ?> 
          <a href="?page=<?= $page - 1 ?>" class="btn btn-default">Previous</a>
      <?php endif; ?>
    </div>

    <div class="col-sm-2">
      <h4>Page <?=$page; ?></h4>
    </div>
      
    <div class="col-sm-2">
      <?php if($page < $totalPages ): ?>
          <a href="?page=<?= $page + 1 ?>" class="btn btn-default">Next</a>
      <?php endif; ?>
    </div>

    <div class="col-sm-2">
      <?php if($page < $totalPages ): ?>
          <a href="?page=<?= $totalPages ?>" class="btn btn-default">Last</a>
      <?php endif; ?>
    </div>

  </div>

  <?php foreach($pagination['ads'] as $index => $ad) : ?>
      <?php if($index % 4 == 0) : ?>
        <div class="row">
      <?php endif;  ?>
        <div class="small-thumb thumbnail col-sm-3">
          <a href="/ads/show?id=<?= $ad['id']?>"><img class="img-rounded" src="<?= $ad['image_url']; ?>"></a>
          <div class="caption">
            <a href="/ads/show?id=<?= $ad['id']?>"><h3><?= $ad['title']; ?></h3></a>
            <p>$<?= $ad['price']; ?></p>
            <p><?= $ad['description']; ?></p>
          </div> 
      <?php if($index % 4 == 3) : ?>
        </div> <!-- closes row -->
      <?php endif; ?>    
        </div> <!-- closes thumbnail -->
  <?php endforeach; ?>
</div>
  