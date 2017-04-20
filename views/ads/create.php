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

	$ad->user_id = AUTH::id();

	try {
		$ad->description = Input::getString('description');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	$ad->image = saveUploadedImage('image');

	if(empty($errors)) {
		$ad->save();
	}
}

 ?>

 <h2 class="text-center">Create an Ad</h2>


 <div class="container">
 	<div class="row">
 		<div class="col-md-4 col-md-offset-4">
 			<form method="post" enctype="multipart/form-data">
 				<div class="form-group">
 					<label class="formBoxTitle" for="titleInput">Title</label>
 					<input class="form-control" id="title" name="title" placeholder="Title" type="text">
 				</div>


 				<div class="form-group">
 					<label class="formBoxTitle" for="locationInput">Location</label>
 					<input class="form-control" id="location" name="location" placeholder="Location" type="text">
 				</div>


 				<div class="form-group">
 					<label class="formBoxTitle" for="priceInput">Price</label>
 					<input class="form-control" id="price" name="price" placeholder="1.99" type="text">
 				</div>


 				<div class="form-group">
 					<label class="formBoxTitle" for="descInput">Description</label>
 					<textarea class="form-control" id="description" name="description" placeholder="Enter your item description here" rows="5"></textarea>
 				</div>

 				<div class="control-group">
 					<!-- start of image -->
 					<label class="control-label">Image</label>

 							<!-- file upload-->
 							<div class="fileupload fileupload-new" data-provides="fileupload">

 								<div>
									<img class="img-thumbnail thumbnail" id="preview" style="width: 200px; height: 150px;"/>
								</div>

 								<div>
 									<span class="btn-primary btn-file"><span class="fileupload-new"></span>
									<button class="btn btn-primary pull-right" style="margin-bottom: 50px;" type="submit"><i class="icon-user icon-white"></i> Submit</button>
 									<input type="hidden" name="MAX_FILE_SIZE" value="1024000000" />
 									<input type="file" name="image" id="image" />
 									</span>

 							   </div>
 							</div>
 							<!--end of file upload -->
 				</div>
 				<!-- end of image -->

 			</form>
 		</div>
 	</div>
 </div>

<!--JS to render image thumbnail-->

 <script type="text/javascript">
 document.getElementById("image").onchange = function () {
	 var reader = new FileReader();

	 reader.onload = function (e) {
		 // get loaded data and render thumbnail.
		 document.getElementById("preview").src = e.target.result;
	 };

	 // read the image file as a data URL.
	 reader.readAsDataURL(this.files[0]);

 };
 </script>
