
<?php
session_start();
require_once __DIR__ . '/../../bootstrap.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ad Lister</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
             

	  <!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>        

</head>
<body>

	<?php require '../../views/partials/navbar.php'; ?>
	<?php require '../../views/partials/head.php'; ?>

<div class="section card">
  	<div class="slider">
		<ul class="slides">
		<?php foreach($ads as $ad) { ?>
		  	<li>
				<img src="<?= $ad['img_url']; ?>">
				<div class="caption center-align">
			  		<h3><?= $ad['ad_name']; ?></h3>
			  		<!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
				</div>
		  	</li>
		<?php } ?> 	  	
		</ul>
  	</div>
</div>

<div class="section">
	<a class="title" href="">FEATURED ITEMS</a>
	<div class="row isotope">
	<?php foreach($ads as $ad) { ?>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="<?= $ad['img_url']; ?>" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4"><?= $ad['ad_name']; ?></span></a>
					<p class="area"><a href=""><?= $ad['ad_description'] ?></a></p>
				</div>
			</div>
		</div>
	<?php } ?> 	
		
</div>
</div>

	<!-- <php require $main_view; ?> -->


    <?= require_once "footer.php"; ?>

	 <!-- <php require '../views/partials/common_js.php'; ?> -->
	 <!--Import jQuery before materialize.js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script>
   $(document).ready(function () {
	   $('.slider').slider({full_width: true});
   });
</script>
</body>
</html>
