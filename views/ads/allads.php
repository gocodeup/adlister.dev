<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">All Ads</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
                <?php foreach($allAds as $ad) : ?>
                    <a href="/Ads/Show?id=<?= $ad->id ?>">
                    <div class="col col-xs-4 ads-background">
                    <h5 style="color:black;" ="black"><?= $ad->title ?></h5>
                    <img src=<?= $ad->img?>>
                    <ul>
                    <li><?= $ad->description ?></li>
                    <li><?= $ad->date_create ?></li>
                    </ul>
                    </div></a>
                <?php endforeach ?>
        </div>

    </section>

</div>