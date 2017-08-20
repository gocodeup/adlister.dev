
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
                <?php foreach($allUsersAds as $ad) : ?>
                    <ul class="col col-xs-4">
                    <li><?= $ad->title ?></li>
                    <li><?= $ad->description ?></li>
                    <li><?= $ad->username ?></li>
                    <li><?= $ad->date_create ?></li>
                    <li><?= $ad->categories ?></li>
                    </ul>
                <?php endforeach ?>
        </div>

    </section>

</div>