<!--Page for single advertisement -->
<div class="container">
    <div class="row">
        <h1 class="category">
            <?=$results->category?>
        </h1>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm">
            <div class="adPhoto">
                <img src="https://images-cdn.9gag.com/photo/aGwd2jn_700b.jpg">
            </div>
        </div>
        <div class="col-md-4 col-sm">
            <div class="adDetails">
                <h1 class="adName"><?=$results->name?></h1>
                <h2 class="adBrand"><?=$results->brand?></h2>
                <h3 class="adDesc"><?=$results->description?></h3>
                <h2 class="adPrice">$<?=$results->price?></h2>
            </div>
            <div class="adUser">
                <h1>Test User</h1>
            </div>
        </div>
    </div>
</div>