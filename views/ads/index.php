<!--Page for an index of advertisements-->

<?php 

require_once __DIR__ . "/../../controllers/PageController.php";

 ?>

<h1>All Ads</h1>
    <div class="row">
        <?php foreach($adListings as $ad): ?>
                <div class="col-xs-6 col-sm-4">
                   <p><a href="/ads/show?id="><img src="/<?= $ad->image ?>"><p>
                   <p><a href="/ads/show?id=<?=$ad->id?>"><?= $ad->title?><p>
                   <p><?= $ad->price ?><p>
                   <p><?= $ad->description ?><p>
                </div>
        <?php endforeach; ?>
    </div>

