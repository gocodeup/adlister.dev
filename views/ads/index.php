<!--Page for an index of advertisements-->

<div class="section">
    <a class="title" href="">INDEX OF ITEMS</a>
    <div class="row isotope">
    <!-- Loops through the ads and displays them all. -->
    <?php foreach($ads as $ad) { ?>
        <div class="col s12 m12 l4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="/ads/show?id=<?=$ad['id']?>">
                        <img width="305" height="229" src="<?= $ad['img_url']; ?>" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/>
                    </a>
                </div>
                <div class="card-content">
                    <p class="area"><a href="/ads/show?id=<?=$ad['id']?>"><?= $ad['ad_name']; ?></a></p>
                    <a href="/ads/show?id=<?=$ad['id']?>"><span class="card-title activator brown-text text-darken-4"><?= $ad['ad_description'] ?></span></a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
