<!--Page for single advertisement -->
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/items">All</a></li>
            <li class="breadcrumb-item"><a href="#"><?=$results->category?></a></li>
            <li class="breadcrumb-item active"><?=$results->name?></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-8 col-sm">
            <div class="adPhoto whiteBox">
                <img src="https://images-cdn.9gag.com/photo/aGwd2jn_700b.jpg">
            </div>
        </div>
        <div class="col-md-4 col-sm">
            <div class="adDetails whiteBox">
                <h1 class="adName"><?=$results->name?></h1>
                <h2 class="adBrand"><?=$results->brand?></h2>
                <h3 class="adDesc"><?=$results->description?></h3>
                <h2 class="adPrice">$<?=$results->price?></h2>
                <button type="button" class="btn btn-success btn-lg btn-block">Contact Seller</button>
            </div>
            <div class="adAbout">About the seller</div>
            <div class="adUser whiteBox">
                <h1>Test User</h1>
            </div>
        </div>
    </div>
</div>