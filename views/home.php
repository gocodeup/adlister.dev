<?php 

require __DIR__ . '/../models/Ad.php';

$ads = Ad::getAds(3);

?>
<!-- Image Background Page Header -->
<div>
 	<!-- Full Width Image Header -->
	 <div class="jumbotron jumbo-home">
	 	<div class="container-fluid">
	 		<div class="row">
				<img class="col-xs-10 col-md-8 col-md-offset-1 col-lg-6 col-lg-offset-2" id="radlister-head" src="/img/radlister.png">
			</div>
			<div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2 ">
				<h2>Home of the Web's
	        	<span class="text-muted">Gnarliest Classifieds</span>
	    		</h2>
	    	</div>
	    	<div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2 ">
	  			<p>Welcome to Radlister, bruh. We're totally stoked that you're here. To get started, pick a category from the list below or just check out these featured ads.</p>
	  		</div>
		</div>
	</div>
</div>
<!-- Page Content -->

<div>
	<div class="container">
		<h2 class="row text-center recent-ads-header">Recent ads</h2>
		
		<?php foreach($ads as $ad) : ?>
		<div class="item-list">
		    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
				<div class="col-xs-2 no-padding photobox">
					<div class="add-image"> 
						<a href="/ads/show?id=<?=$ad['id']?>"">
							<img class="thumbnail no-margin" src="<?= $ad['img_url'] ?>" alt="img">
						</a> 
					</div>
				</div>
			 
				<div class="col-xs-7 add-desc-box">
					<div class="add-details">
						<h5 class="add-title"> 
							<a class="content-link" href="/ads/show?id=<?=$ad['id']?>"> <?= $ad['title'] ?></a>
						</h5>
						<span class="info-row"> 
							<span class="date">
								<i class="fa fa-clock-o"> </i>
								<?php $estab = strtotime($ad['date_listed']); ?>
									<?=date("m/d/Y", $estab); ?>
							</span>
							- 
							<span class="category"><?= $ad['category'] ?> </span>
							- 
							<span class="item-location">
								<i class="fa fa-map-marker"></i> 
								San Antonio, TX 
							</span> 
						</span> 
					</div>
				</div>
			 	
				<div class="col-xs-3 text-right  price-box">
					<h2 class="item-price">$<?= $ad['price'] ?></h2>
					<a type="button" class="btn info-btn btn-small" id="view-ad-btn" href="ads/show?id=<?=$ad['id']?>">Get More info!</a>
				</div>
			</div> 
		</div>

		<hr class="ad-divider">
		<?php endforeach ?>
	</div>
</div>




