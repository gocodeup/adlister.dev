<?php 
require_once __DIR__ . '/../../utils/Auth.php';
require_once __DIR__ . '/../../models/Model.php';
require_once __DIR__ . '/../../models/Ad.php';

if (isset($_SESSION['LOGGED_IN_ID']))
{
	$userId = $_SESSION['LOGGED_IN_ID'];
}

if (isset($_POST['deleteAd']))
{
	$deleteId = $_POST['deleteAd'];
	Ad::deleteAd($deleteId);
}
$adNum = 0;
$user = User::showUser($userId);
$ads = Ad::findAdByUserId($userId, 3);
$date = date('Y-m-d');
// Signup Functionality. Likely needs to be refactored
$adTitle = escape(Input::get('adTitle'));
$adDescription = escape(Input::get('adDescription'));
$adPrice = escape(Input::get('adPrice'));
$adImgURL = escape(Input::get('adImgURL'));
$adCategory = escape(Input::get('adCategory'));
$adTags = escape(Input::get('adTags'));
$adId = escape(Input::get('adId'));

if (!empty($adTitle) && !empty($adDescription) && !empty($adPrice) && !empty($adImgURL) && !empty($adCategory) && !empty($adTags)) {
    $editAd = Ad::find($adId);
    $editAd->title = $adTitle;
    $editAd->description = $adDescription;
    $editAd->price = $adPrice;
    $editAd->img_url = $adImgURL;
    $editAd->category = $adCategory;
    $editAd->tags = $adTags;
    $editAd->user_id = $userId;
    $editAd->date_listed = date('Y-m-d');
    $editAd->id = $adId;
    $editAd->save();
}

?>
	<!-- USER INFO -->
	<div class="row">
		<div class=" col-xs-12">
            <div class="col-sm-12 col-lg-offset-1">
                <div class="col-xs-12 col-sm-4 text-center">
                    <img id="profile-pic" src="<?= $user['image'] ?>">

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
    <!-- END USER INFO -->

    <!-- USER'S ADS -->
	<div class="profile-ads">
    	<div class="container">
			<h2 class="row text-center recent-ads-header">Your Latest Items</h2>
					<div class="item-list">
					    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
							<div class="col-xs-2 no-padding photobox">
								<a href="/ads/create" type="button" class="btn info-btn btn-small">Create new ad!</a>
							</div>
						</div> 
					</div>

					<hr class="ad-divider">
            <?php if (!empty($ads)) { 
            	foreach($ads as $ad) { ?>
					<div class="item-list">
					    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
							<div class="col-xs-2 no-padding photobox">
								<div class="add-image"> 
									<a href="/ads/show?id=<?=$ad['id']?>">
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
								<form id="adActions" method="POST">
				                    <button type="button" class="btn edit-btn btn-small" id="delete-modal-button" data-toggle="modal" data-target=".edit-modal-<?=$adNum?>">Edit</button>
				                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-<?=$adNum?>">Delete</button>
					            </form>

					            <!-- EDIT MODAL -->
								<div class="modal fade edit-modal-<?=$adNum?>" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-lg">
									  <div class="modal-content">
									    <div class="modal-header">
									      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									      <h4 class="modal-title text-center" id="myLargeModalLabel">Let's Fix This Ad!</h4>
									      <form method="POST">
									      	<label class='pull-left'>Title</label>
										    <input name="adTitle" class="form-control" required value="<?= $ad['title'] ?>">
										   
										    <label class='pull-left'>Description</label>
										    <input name="adDescription" class="form-control" required value="<?= $ad['description'] ?>">
										    
										    <label class='pull-left'>Price</label>
										    <input name="adPrice" class="form-control" type="number" min="0" placeholder="numbers only" required value="<?= $ad['price'] ?>">
									
										    <label class='pull-left'>Image</label>
										    <input name="adImgURL" class="form-control" required value="<?=$ad['img_url'] ?>">
										    
										    <label class='pull-left'>Category</label>
										    <input name="adCategory"class="form-control" required value="<?=$ad['category'] ?>">

										    <label class='pull-left'>Tags</label>
										    <input name="adTags"  class="form-control" placeholder="characters only" required value="<?=$ad['tags'] ?>">
										    <input name="adId"  class="form-control hidden" placeholder="characters only" required value="<?=$ad['id'] ?>">
								  			<button type="submit" class="btn btn-sml center" id='update-btn'>Update!</button>
									      </form>
									    </div>
									  </div>
									</div>
								</div>
								<!-- END EDIT MODAL -->

					            <!-- DELETE MODAL -->
								<div class="modal fade delete-modal-<?=$adNum?>" tabindex="-1" role="dialog" aria-hidden="true">
									<div class="modal-dialog modal-sm">
									  <div class="modal-content">
									    <div class="modal-header">
									      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									      <h4 class="modal-title text-center" id="mySmallModalLabel">Are you sure, bruh?</h4>
									      <form method="POST">
									      	<button type="button" class="btn btn-sml pull-left" id='dont-delete' data-dismiss="modal" aria-label="Close">Don't delete!</button>
									        <button name="deleteAd" id="deleteAd" type="submit" class="btn btn-danger btn-sml" value="<?= $ad{'id'} ?>">Delete</button>
									      </form>
									    </div>
									  </div>
									</div>
								</div>
								<!-- END DELETE MODAL -->
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