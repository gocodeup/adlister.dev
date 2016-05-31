<?php
$ad = Ads::all();
?>
<div class="col-lg-2 sidebar">
    <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    CATEGORIES
                </li>
                <li>
                    <a href="#">APPLIANCES</a>
                </li>
                <li>
                    <a href="#">AUTO</a>
                </li>
                <li>
                    <a href="#">BOOKS</a>
                </li>
                <li>
                    <a href="#">FREE</a>
                </li>
                <li>
                    <a href="#">MISC.</a>
                </li>
                <li>
                    <a href="#">OUTDOORS</a>
                </li>
                <li>
                    <a href="#">TOOLS</a>
                </li>
                <li>
                    <a href="#">TOYS & GAMES</a>
                </li>
            </ul>
        </div> <!-- sidebar-wrapper -->
    </div>

    <!-- ITEMS -->
    <?php foreach($ad->attributes as $key => $ads): ?>
        <div class="col-xs-12 col-sm-12 col-md-3 items thumbnail-projects">
            <img src="<?= $ads['img_url']; ?>">
            <h3 class="item-title"><?= $ads['name']; ?></h3>
            <h4 class="item-description">$<?= $ads['price']; ?></h4>
            <p class="item-description"><?= $ads['description']; ?></p>
        </div>
    <?php endforeach; ?>
    
</div>
