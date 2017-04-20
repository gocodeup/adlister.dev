
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 id="homeTitle" class="text-center">Welcome To Adlister</h1>

            </div>

        </div>

    </section>

    <section id="features">

        <div class="row">

            <h2 class="section-title text-center">Featured Items</h2>
            <!-- Placeholder for featured items.-->
        </div>

    </section>
    
    <div class="container">
        <div class="row">
            <?php foreach($selectThree as $ad) { ?>
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><a href="/show?id=<?= $ad->id ?>" style="color: white"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></div>
                        <div class="panel-body"><img src=<?= "$ad->image" ?> class="img-responsive" style="width:100%; height:250px" alt="Image"></div></a>
                        <div class="panel-footer"><?= $ad->description ?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div><!-- ends container -->
    <a href="/items" id="homeViewAll" style="margin-left: 45%" class="btn btn-primary">View All Items</a>

</div>