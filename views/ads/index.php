<!--Page for an index of advertisements-->

<div class="section">
    <a class="title" href="">INDEX OF ITEMS</a>
    <div class="row isotope">
    <?php foreach($ads as $ad) { ?>
        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img width="305" height="229" src="<?= $ad['img_url']; ?>" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
                </div>
                <div class="card-content">
                    <p class="area"><a href="ads/show?id=<?=$ad['id'];?>"><?= $ad['ad_name']; ?></a></p>
                    <a href="show.php"><span class="card-title activator brown-text text-darken-4"><?= $ad['ad_description'] ?></span></a>
                </div>
            </div>
        </div>
    <?php } ?> 
    </div>   
</div>


