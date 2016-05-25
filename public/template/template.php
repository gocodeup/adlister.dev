
<?php
session_start();
// require_once __DIR__ . '/../bootstrap.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ad Lister</title>
	<?php require '../../views/partials/head.php'; ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  <!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>        
</head>
<body>
	<?php require '../../views/partials/navbar.php'; ?> -->
<div class="section card">
  	<div class="slider">
		<ul class="slides">
		  	<li>
				<img src="img/image_not_available.gif">
				<div class="caption center-align">
			  		<h3>This is our big Tagline!</h3>
			  		<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
		  	</li>
		  	<li>
				<img src="img/image_not_available.gif">
				<div class="caption left-align">
			  		<h3>Left Aligned Caption</h3>
			  		<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
		  	</li>
		  	<li>
				<img src="img/image_not_available.gif">
				<div class="caption right-align">
			  		<h3>Right Aligned Caption</h3>
			  		<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
		  	</li>
		  	<li>
				<img src="img/image_not_available.gif">
				<div class="caption center-align">
			  		<h3>This is our big Tagline!</h3>
			  		<h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
				</div>
		  	</li>
		</ul>
  	</div>
</div>
<div class="section">
	<a class="title" href="">FEATURED ITEMS</a>
	<div class="row isotope">
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="img/image_not_available.gif" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4">ITEM NAME</span></a>
					<p class="area"><a href="">brief description</a></p>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="img/image_not_available.gif" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4">ITEM NAME</span></a>
					<p class="area"><a href="">brief description</a></p>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="img/image_not_available.gif" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4">ITEM NAME</span></a>
					<p class="area"><a href="">brief description</a></p>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="img/image_not_available.gif" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4">ITEM NAME</span></a>
					<p class="area"><a href="">brief description</a></p>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="img/image_not_available.gif" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4">ITEM NAME</span></a>
					<p class="area"><a href="">brief description</a></p>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
					<a href="">
						<img width="305" height="229" src="img/image_not_available.gif" class="responsive-img wp-post-image" alt="ITEM_1" title="item_1" sizes="(max-width: 305px) 100vw, 305px"/> 
					</a>
				</div>
				<div class="card-content">
					<a href=""><span class="card-title activator brown-text text-darken-4">ITEM NAME</span></a>
					<p class="area"><a href="">brief description</a></p>
				</div>
			</div>
		</div>
</div>
</div>

	<!-- <php require $main_view; ?> -->

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

