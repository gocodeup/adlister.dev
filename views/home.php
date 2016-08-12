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
            <div class="col-xs-4">
                <a href="#"><img class="img-thumbnail img-responsive" alt="<?= $ad->name ?>" src="<?= $ad->image ?>"></a>
                <br>
                <?= $ad->name; ?>
                <hr>
                <?= $ad->description; ?>
            </div>
            <div class="col-xs-4">
                Item
            </div>
            <div class="col-xs-4">
                Item
            </div>
        </div>

    </section>

</div>