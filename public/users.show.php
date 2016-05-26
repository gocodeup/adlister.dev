<?php 

require_once __DIR__ . '/../database/db_connect.php';
require_once '../utils/Input.php';

if (isset($_SESSION['LOGGED_IN_ID']))
{
	$id = $_SESSION['LOGGED_IN_ID'];
}

function showUser($dbc, $id)
{
	$id = Input::get('id');
	$ad = [];
	$stmt = $dbc->prepare("SELECT * FROM user JOIN ads ON user.id = ads.user_id WHERE ads.id = {$id}");
	$stmt->execute();
	$ad['ad'] = $stmt->fetch(PDO::FETCH_ASSOC);
	return $ad;
}

extract(showUser($dbc, Input::get('id')));

?>
<!DOCTYPE html>
<html>
<head>
	<title>An ad</title>
	<?php require '../views/partials/header.php'; ?>
</head>
<div class="container">
	<div class="row">
		<div class=" col-xs-12">
    	 
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-4 text-center">
                    <img src="img/andrew.jpg">
                    <!-- <button class="col-xs-6 col-xs-offset-3 btn btn-success"><span class="fa fa-plus-circle"></span> Follow </button> -->
                </div>
                <div class="col-xs-12 col-sm-8">
                    <h1>Andrew Powell-Morse</h1>
                    <p><strong>Location: </strong> San Antonio, TX </p>
                    <p><strong>Contact: </strong> andrew@radlister.com </p>
                    <p><strong>Listings: </strong> 1,584 <strong>Sold: </strong> 1,236 <strong> Seller Rating: </strong> 9.96</p>
                    <p><strong>Top Categories: </strong>
                        <span class="tags">Live Farm Animals, </span> 
                        <span class="tags">Pokemon Cards, </span>
                        <span class="tags">Antique Mannequins, </span>
                        <span class="tags">Diving Boards</span>
                    </p>
                </div>             
            </div>
        </div>
    </div>
	<div class="row">
		<div class=" col-xs-12">
            <h2>Your Latest Items:</h2>
            <div class="item-list">
				<div class="col-sm-2 no-padding photobox">
					<div class="add-image"> 
						<a href="ads-details.html">
							<img class="thumbnail no-margin" src="img/antique_mannequin_thumb.jpg" alt="img">
						</a> 
					</div>
				</div>
			 
				<div class="col-sm-7 add-desc-box">
					<div class="add-details">
						<h5 class="add-title"> 
							<a href="ads-details.html"> 1880s Mannequin - Pristine Condition</a>
						</h5>
						<span class="info-row"> 
							<span class="date">
								<i class="fa fa-clock-o"> </i> 
								Today 1:21 pm 
							</span> 
							- 
							<span class="category">Antique Mannequins </span>
							- 
							<span class="item-location">
								<i class="fa fa-map-marker"></i> 
								San Antonio, TX 
							</span> 
						</span> 
					</div>
				</div>
			 	
				<div class="col-sm-3 text-right  price-box">
					<h2 class="item-price"> $ 250 </h2>
					<a class="btn btn-success  btn-sm">Buy Now</a> 
				</div>
			 
			</div>         
            
		</div>
	</div>
</div>

<?php require '../views/partials/footer.php'; ?>