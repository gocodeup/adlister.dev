<?php 
require_once __DIR__ . '/../../utils/Auth.php';
require_once __DIR__ . '/../../models/Model.php';
require_once __DIR__ . '/../../models/Ad.php';

if (isset($_SESSION['LOGGED_IN_ID']))
{
	$userId = $_SESSION['LOGGED_IN_ID'];
}

$user = User::showUser($userId);
$ads = Ad::findAdByUserId($userId, 3);

?>

	<div class="row">
		<div class=" col-xs-12">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-4 text-center">
                    <img src="<?= $user['image'] ?>">
                    <!-- <button class="col-xs-6 col-xs-offset-3 btn btn-success"><span class="fa fa-plus-circle"></span> Follow </button> -->
                </div>
                <div class="col-xs-12 col-sm-8">
                    <h1><?= $user['name'] ?></h1>
                    <p><strong>Location: </strong> San Antonio, TX </p>
                    <p><strong>Contact: </strong> <?= $user['email'] ?></p>
                    <p><strong>Listings: </strong> 1,584 <strong>Sold: </strong> 1,236 <strong> Seller rating: </strong> 9.96</p>
                    <p><strong>Top categories: </strong>
                        <span class="tags">Live Farm Animals, </span> 
                        <span class="tags">Pokemon Cards, </span>
                        <span class="tags">Antique Mannequins, </span>
                        <span class="tags">Diving Boards</span>
                    </p>
                </div>             
            </div>
        </div>
    </div>
<<<<<<< HEAD
	<div class="home-ads">
    	<div class="container">
			<h2 class="row text-center recent-ads-header">Your Latest Items</h2>
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
										<a class="content-link" href="ads-details.html"> <?= $ad['description'] ?></a>
									</h5>
									<span class="info-row"> 
										<span class="date">
											<i class="fa fa-clock-o"> </i> 
											Today 1:21 pm 
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
								<a class="btn delete-btn  btn-sm">Edit This Ad</a> 
							</div>
						</div> 
>>>>>>> master
					</div>

					<hr class="ad-divider">
		
            
            	<?php } ?>
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