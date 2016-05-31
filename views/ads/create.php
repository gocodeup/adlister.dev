<?php 
require_once '../models/Ad.php';

function newUserAd()    

{
//To do: sanatize these values. 

	$ad = new Ad;
	$ad->user_id = escape($_SESSION['LOGGED_IN_ID']);
	$ad->date_listed = escape(date("Y-m-d"));
	$ad->title = escape(Input::get('title'));
	$ad->description = escape(Input::get('description'));
	$ad->price = escape(Input::get('price'));
	$ad->img_url = escape(Input::get('img_url'));
	$ad->category = escape(Input::get('category')); 
	$ad->tags = escape(Input::get('tags'));
	$ad->save(); 

	// $newId = $dbc->lastInsertId();

	// header("Location: http://adlister.dev/ads/show?id={$newId}");
}

if(Input::has('title')) {    
	newUserAd();
}

?>

		<form role="form" method="POST">  
			<h2>Make a new ad</h2>

			<label>Title</label>
		    <input name="title" class="form-control" id="ad_title" placeholder="characters only" required>
		    
		    <label>Price</label>
		    <input name="price" class="form-control" id="ad_price" type="number" min="0" placeholder="numbers only" required>
	
		    <label>Image url</label>
		    <input name="img_url" class="form-control" id="ad_img" required>
		    
		    <label>Category</label>
		      <select class="form-control" id="category" name="category">
			    <option>Cameras</option>
			    <option>Live stock</option>
			    <option>Vehicles</option>
			  </select>

			<label>Description</label>
		    <input name="description" class="form-control" id="ad_description" placeholder="characters only" required>

		    <label>Tags</label>
		    <input name="tags" class="form-control" placeholder="characters only" required>

  			<button type="submit" class="btn btn-default" id="ad_submit" >add</button>
		</form>