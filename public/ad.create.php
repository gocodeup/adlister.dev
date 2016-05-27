<?php 
require_once '../utils/Auth.php';
require_once '../utils/Input.php';
require_once '../models/Ad.php';
require_once '../models/Model.php';

function newUserAd()

{
//To do: sanatize these values. 
//To do: get user id if logged in. 
//To do: only logged in users should see this page. 



	$ad = new Ad;
	$ad->user_id = 1;
	$ad->date_listed = date("Y-m-d");;
	$ad->title = Input::get('title');
	$ad->description = Input::get('description');
	$ad->price = Input::get('price');
	$ad->img_url = Input::get('img_url');
	$ad->category = Input::get('category');
	$ad->tags = Input::get('tags');
	$ad->save();

}

if(Input::has('title')) { 
		newUserAd();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add an ad</title>
	
    <?php require '../views/partials/header.php'; ?>
   
</head>
<body>
	<div class="container">  
		<form role="form" method="POST">  
			<h2>Make a new ad</h2>

			<label>Title</label>
		    <input name="title" class="form-control" placeholder="characters only" required>
		   
		    <label>Description</label>
		    <input name="description" class="form-control" placeholder="characters only" required>
		    
		    <label>Price</label>
		    <input name="price" class="form-control" type="number" min="0" placeholder="numbers only" required>
	
		    <label>Image url</label>
		    <input name="img_url" class="form-control" required>
		    
		    <label>Category</label>
		    <input name="category" class="form-control" placeholder="characters only" required>

		    <label>Tags</label>
		    <input name="tags" class="form-control" placeholder="characters only" required>

  			<button type="submit" class="btn btn-default">add</button>
		</form>  
	</div>

	
	<?php require '../views/partials/footer.php'; ?>