<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">Welcome To Gavlister</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h3 class="section-title">Featured Items</h3>
            
        </div>
        <hr>
        <div class="row">
            <?php foreach ($items->attributes as $item): ?>
                
                <div class="col-xs-4">
                    <a href="/ads/show/?id=<?= $item['id'] ?>"><img class="img-thumbnail img-responsive featured-image" alt="<?= $item['name']; ?>" src="<?= $item['image']; ?>"></a>
                    <br>
                    <h4><?= $item['name']; ?></h4>
                    <?= $item['description']; ?>
                    <br>
                    <strong>$<?= $item['price']; ?></strong>
                </div>
            <?php endforeach ?>
        </div>

    </section>

</div>