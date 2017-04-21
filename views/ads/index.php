<!--Page for an index of advertisements-->

<?php 

require_once __DIR__ . "/../../controllers/PageController.php";
 ?>
<div class="container">

    <section id="welcome">

        <div class="row">

            <div class="col-xs-12">

                <h1 class="text-center">All Ads</h1>

            </div>

        </div>

    </section>

    <section id="all_ads">

        <div class="container-fluid">

     <div class="row">
        <?php foreach($adListings as $ad): ?>
                <div class="col-xs-6 col-sm-4">
                   <p><a href="/ads/show?id=<?=$ad->id?>"><img src="<?= $ad->image ?>"><p>
                   <p><a href="/ads/show?id=<?=$ad->id?>"><?= $ad->title?><p>
                </div>
        <?php endforeach; ?>
        
    </div>
        <?php if($page > 1): ?>
            <a href="?page=<?= $page - 1 ?>"><span class="glyphicon glyphicon-chevron-left">Previous</span></a>
        <?php endif; ?>
                
        <?php if($page < $lastPage): ?> 
            <a class="pull-right" href="?page=<?= $page + 1 ?>"><span class="glyphicon glyphicon-chevron-right">Next</span></a>
        <?php endif; ?>
</div>
</section>
</div>