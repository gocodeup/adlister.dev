<?php
require_once __DIR__ . "../../../bootstrap.php";

session_start();

function newPost()
{
	$name = Input::escape(Input::get("name"));
	$category = Input::escape(Input::get("category"));
	$sub_category = Input::escape(Input::get("sub_category"));
	$price = Input::escape(Input::get("price"));
	$description = Input::escape(Input::get("description"));
	$pick_up_location = Input::escape(Input::get("pick_up_location"));
	$location_city = Input::escape(Input::get("location_city"));
	$image = Input::escape(Input::get("image"));

	if(!is_numeric($price)) {
		echo "Price must be numeric!";
		return;
	}

	//info pulled from somewhere else
	// $user_id = $__SESSION["user_id"];
	// $username = $__SESSION["username"];
	$date_posted = date("Y-m-d");

	$newPost = new Ads();
	// $newPost->user_id = $user_id;
	// $newPost->username = $username;
	$newPost->date_posted = $date_posted;
	$newPost->name = $name;
	$newPost->category = $category;
	$newPost->sub_category = $sub_category;
	$newPost->price = $price;
	$newPost->description = $description;
	$newPost->availability_status = "available";
	$newPost->pick_up_location = $pick_up_location;
	$newPost->location_city = $location_city;
	$newPost->image = $image;
	$newPost->insertAd();

var_dump($image);

}
newPost();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Listing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
</head>
<body>
<?php include_once '../assets/menu.php'; ?>
<div id="content">
	<div class="menu-trigger"></div>
	<?php include '../assets/header.php' ?>
	<div class="container">
		<h1>Create an ad</h1>
		<div class= "col-md-6 col-md-offset-3">
			<h3>Posting as <?= $__SESSION["username"] ?>. </h3>
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="name">
					<label for="name">Name:</label>
					<input type="text" name="name"></input>
				</div>
				<div class="form-group">
					<label for="category">Category:</label>
					<input type="text" name="category"></input>
				</div>
				<div class="form-group">
					<label for="sub_category">Sub-Category:</label>
					<input type="text" name="sub_category"></input>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" name="price"></input>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" cols="40" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="pick_up_location">Pick Up Location:</label>
					<input type="text" name="pick_up_location"></input>
				</div>
				<div class="form-group">
					<label for="location_city">Location City:</label>
					<input type="text" name="location_city"></input>
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" name="image"></input>	
				</div>
				<div class="row">
			        <div class="col-sm-6">
		                <button type="submit" class="btn btn-primary">Submit changes</button>
		            </div>
		 	  	</div>
		    </form>
		</div>
		
	</div>
</div>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>
