
<!-- This section is the carrousel -->
<div class="section card">
    <div class="slider">
        <ul class="slides">
        <!-- The foreach loop is to display the 3 most recent ads -->
        <?php foreach($ads as $ad) {
            if((count($ads)-3)<$ad['id']){ ?>
            <li>
                <img src="<?= $ad['img_url']; ?>">
                <div class="caption center-align">
                    <h3><?= $ad['ad_name']; ?></h3>
                </div>
            </li>
        <?php }} ?>
        </ul>
    </div>
</div>

<!-- This section is for the FEATURED ITEMS it displays the most recent ads -->
<div class="section">
    <a class="title" href="">FEATURED ITEMS</a>
    <div class="row isotope">
    <?php foreach($ads as $ad) {
        if((count($ads)-3)<$ad['id']){ ?>
        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="/ads/show?id=<?=$ad['id']?>">
                        <img width="305" height="229" src="<?= $ad['img_url']; ?>" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/>
                    </a>
                </div>
                <div class="card-content">
                    <a href="/ads/show?id=<?=$ad['id']?>"><span class="card-title activator brown-text text-darken-4"><?= $ad['ad_name']; ?></span></a>
                    <p class="area"><a href="/ads/show?id=<?=$ad['id']?>"><?= $ad['ad_description'] ?></a></p>
                </div>
            </div>
        </div>
    <?php }} ?>

</div>
</div>

<!-- Scripts for Jquery, materialize.js also for the carrousel-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
   $(document).ready(function () {
       $('.slider').slider({full_width: true});
   });
</script>
