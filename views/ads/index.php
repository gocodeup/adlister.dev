<?php

require_once '../models/Ad.php';

$ads = Ad::all();
$adNum = 0;
function getAds() {
	$data['ads'] = Ad::all()->attributes;
	return $data; 
}

extract(getAds()); 

 ?>
		
<!-- USER'S ADS -->
	<div class="profile-ads">
    	<div class="container">
			<h2 class="row text-center recent-ads-header">All Ads</h2>
            <?php if (!empty($ads)) { 
            	foreach($ads as $ad) { ?>
					<div class="item-list">
					    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
							<div class="col-xs-2 no-padding photobox">
								<div class="add-image"> 
									<a href="ads-details.html">
										<img class="thumbnail no-margin" src="<?= $ad['img_url'] ?>" alt="img">
									</a> 
								</div>
							</div>
						 
							<div class="col-xs-7 add-desc-box">
								<div class="add-details">
									<h5 class="add-title"> 
										<a class="content-link" href="ads-details.html"> <?= $ad['title'] ?></a>
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
			
            
            	<?php $adNum++; } ?>
        </div>
	</div>
            <?php } else { ?>
	    		<div class="item-list">
				    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
						<div class="no-ads">
							<p>Haven't uploaded any ads!</p>
						</div>
					</div> 
				</div>	
			<?php } ?>        
            

		</div>
	</div>
	<!-- END USER'S ADS -->