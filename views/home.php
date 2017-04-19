
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
        </div>

    </section>
    
    <div class="container">
        <div class="row">
            <?php foreach($selectThree as $ad) { ?>
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><a href="/show?id=<?= $ad->id ?>" style="color: white"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></a></div>
                        <div class="panel-body"><img src=<?= "/img/$ad->image" ?> class="img-responsive" style="width:100%; height:250px" alt="Image"></div>
                        <div class="panel-footer"><?= $ad->description ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div><!-- ends container -->

</div>