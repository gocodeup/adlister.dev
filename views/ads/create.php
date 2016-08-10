<?php
REQUIRE __DIR__ "views/partials/navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Ad</title>
	<link href="css/main.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<h1 class="h1">Create an Ad</h1>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="well well-sm">
					<form id="FormEnvioCorreo">
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="subject">Subject</label>
									<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required="required" autofocus>
								</div>
								<div class="form-group">
									<label for="subject">Price</label>
									<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required="required" autofocus>
								</div>
								<div class="form-group">
									<label for="name">Attach</label>
									<input type="file" id="fileselect" name="documents" class="form-control"  style="  width: 310px;">
								</div>
							</div>
						</div>
								<div class="form-group">
									<label for="subject">Description</label>
									<textarea type="text" id="description" name="description" class="form-control" placeholder="Enter item description here" required="required" autofocus rows="10"></textarea>
								</div>
								<div class="col-md-12">
									<div class="control-group">
										<label class="control-label" for="button1id"></label>
										<div class="controls">
											<button id="button1id" name="button1id" class="btn btn-success">Submit</button>
											<button id="button2id" name="button2id" class="btn btn-danger">Clear</button>
										</div>
									</div>
								</div>
							</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
		</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>