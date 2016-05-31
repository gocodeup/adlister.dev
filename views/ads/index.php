<?php
$ad = Ads::all();
?>
    <!-- ITEMS -->
    <div class="row">
        <?php foreach($ad->attributes as $key => $ads): ?>
            <div class="col-md-3 item thumbnail-projects">
                <img src="<?= $ads['img_url']; ?>">
                <h3 class="item-title"><?= $ads['name']; ?></h3>
                <h4 class="item-description">$<?= $ads['price']; ?></h4>
                <p class="item-description"><?= $ads['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    

