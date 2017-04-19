<?php
require_once __DIR__ . '/../../controllers/PageController.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="ie=edge" http-equiv="x-ua-compatible">
	<meta content="" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">

	<title>Items</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
		<div class="row">
			<?php foreach($adListings as $ad) { ?>
				<div class="col-sm-4">
					<div class="panel panel-primary">
						<div class="panel-heading"><a href="#" style="color: white"><?= $ad->title ?><div class="pull-right"><?= "$" . $ad->price ?></div></a></div>
						<div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
						<div class="panel-footer"><?= $ad->description ?></div>
					</div>
				</div>
			<?php } ?>
		</div><!-- ends row -->
	</div><!-- ends container -->

	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>