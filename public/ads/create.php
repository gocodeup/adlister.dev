<?php
require_once __DIR__ . "../../../bootstrap.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Listing</title>
	<link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<h1>Create an ad</h1>
	<div class= "col-md-6 col-md-offset-3">
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

</body>
</html>
