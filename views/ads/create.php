<!--Page for creating new advertisement listings-->
<?php 

require_once __DIR__ . '/../../utils/Input.php';

$errors = [];

if(!empty($_POST) && validateInput()) {
	$ad = new Ad();

	try {
		$ad->name = Input::getString('title');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	try {
		$ad->price = Input::getFloat('price');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	$ad->user_is = AUTH::id();

	try {
		$ad->description = Input::getString('description');
	} catch (Exception $e) {
		$errors[] = $e->getMessage();
	}

	$ad->image = saveUploadedImage('image');
	die;

	if(empty($errors)) {
		$ad->save();
	}
}

function validateInput() {
	if(empty($_POST['title']) || empty($_POST['price']) || empty($_POST['description']) || empty($_POST['image'])) {
		return false;
	} else {
		return true;
	}
}

?>

<h1 class="text-center">Create an Ad</h1>

<form class="form-horizontal" method="POST">
	<fieldset>

    	<div class="form-group col-lg-10 col-lg-offset-2">
    		<label for="title" class="col-lg-2 control-label">Posting Title</label>
    		<div class="col-lg-10">
        	<input type="text" class="form-control" id="title" placeholder="Posting Title">
    		</div>
    	</div>

    	<div class="form-group col-lg-10 col-lg-offset-2">
      		<label for="price" class="col-lg-2 control-label">Price</label>
      		<div class="col-lg-10">
        	<input type="text" class="form-control" id="price" placeholder="0.00">
      		</div>
    	</div>
    
    	<div class="form-group col-lg-10 col-lg-offset-2">
      		<label for="description" class="col-lg-2 control-label">Description</label>
      		<div class="col-lg-10">
        	<textarea class="form-control" rows="4" id="description" style="resize: none;"></textarea>
      		</div>
    	</div>
	</fieldset>
</form>

<form action="/ads/show" enctype="multipart/form-data" method="POST">
 	<div class="form-group col-lg-10 col-lg-offset-2">
 		Select image to upload:
 		<input id="fileToUpload" name="fileToUpload" type="file">
 		<input name="submit" type="submit" value="Upload Image">
 	</div>
 	<div class="form-group">
    	<div class="col-lg-10 col-lg-offset-2">
        	<button type="reset" class="btn btn-default">Cancel</button>
        	<button type="submit" class="btn btn-primary">Create Ad</button>
      	</div>
    </div>
</form>