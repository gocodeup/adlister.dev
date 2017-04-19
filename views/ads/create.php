<!--Page for creating new advertisement listings-->
<?php
require_once __DIR__ . '/../../controllers/PageController.php';
require_once __DIR__ . '/../../utils/Input.php';


$errors = [];

if(!empty($_POST)) {

	$ad = new Ads();

	try {
		$ad->title = Input::getString('title');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$ad->location = Input::getString('location');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$ad->price = Input::getFloat('price');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	$ad->username = "ice_king";

	try {
		$ad->description = Input::getString('description');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	$ad->image = "image.png";
// var_dump ($ad); die;
	if(empty($errors)) {
		$ad->save();
	}
}

 ?>

<h2 class="text-center">Create an Ad</h2>


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			<form method="post">
				<div class="form-group">
					<label class="formBoxTitle" for="titleInput">Title</label> <input class=
					"form-control" id="title" name="title" placeholder="Title" type="text">
				</div>


				<div class="form-group">
					<label class="formBoxTitle" for="locationInput">Location</label>
					<input class="form-control" id="location" name="location" placeholder=
					"Location" type="text">
				</div>


				<div class="form-group">
					<label class="formBoxTitle" for="priceInput">Price</label> <input class=
					"form-control" id="price" name="price" placeholder="1.99" type="text">
				</div>


				<div class="form-group">
					<label class="formBoxTitle" for="descInput">Description</label>
					<textarea class="form-control" id="description" name="description" placeholder="Enter your item description here" rows="5"></textarea>
				</div>


				<!-- <div class="form-group">
					<form action="upload.php" enctype="multipart/form-data" method="post">
						Select image to upload:
						<input id="fileToUpload" name="fileToUpload" type="file">
						<input name="submit" type="submit" value="Upload Image">
					</form>
				</div> -->


				<div class="col-md-4 text-center">
					<button class="btn btn-primary" type="submit"><i class=
					"icon-user icon-white"></i> Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
