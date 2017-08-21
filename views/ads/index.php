
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">All Users Ads</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
                <?php 
                if(!empty($allUsersAds)){
                foreach($allUsersAds as $ad) : ?>
                <div>
                    <img src=<?= $ad->img ?>>
                    <ul class="col col-xs-4">
                    <li><?= $ad->title ?></li>
                    <li><?= $ad->description ?></li>
                    <li><?= $ad->username ?></li>
                    <li><?= $ad->date_create ?></li>
                    <li><?= $ad->categories ?></li>
                    <a href="/Ads/Edit?title=<?php 
                    $title = explode(" ", $ad->title);
                    $title = implode("_",$title);
                    echo $title; ?>"><button class="btn-primary btn">Edit</button></a>
                    </ul>
                </div>
                <?php endforeach; } ?>
        </div>

    </section>

</div>