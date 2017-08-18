<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome To Adlister</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            <!-- Placeholder for featured items.-->
            <?php foreach($items->attributes as $key => $item) : ?>
                <div class="col-md-4">

                    <h4 class="text-center"><?= $item['name']; ?></h4>

                    <img src="<?= $item['image_url']; ?>" class="img-responsive center-block">

                    <p>
                        <?= substr($item['description'], 0, 100) . "..."; ?>
                    </p>
                    <p>
                        <a href="/items/show?id=<?= $item['id']; ?>">View More Items</a>
                    </p>

                </div>
                <?php if (($key + 1) % 3 == 0) : ?>
                    </div>
                    <div class="row">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </section>

</div>