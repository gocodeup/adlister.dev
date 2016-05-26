<?php 
require_once __DIR__ . '/../database/db_connect.php';
require_once '../utils/Input.php';
require_once '../utils/helper_functions.php';

function pageController($dbc)
{

 	if (!empty($_POST)){

		$title = Input::getString('title');

		$description = Input::getString('description');

		$price = Input::getNumber('price');

		$img_url = Input::getString('img_url');

		$catagory = Input::getString('catagory');

		$tag = Input::getString('tag');

		$stmt = $dbc->prepare('INSERT INTO ads (title, description, price, img_url, catagory, tag) VALUES (:title, :description, :price, :img_url, :catagory, :tag)');

	    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
	    $stmt->bindValue(':description', $description,  PDO::PARAM_STR);
	    $stmt->bindValue(':price', $price,  PDO::PARAM_INT);
	    $stmt->bindValue(':img_url', $img_url,  PDO::PARAM_STR);
	    $stmt->bindValue(':catagory', $catagory,  PDO::PARAM_STR);
	    $stmt->bindValue(':tag', $tag,  PDO::PARAM_STR);

	    $stmt->execute();
	    $_POST = [];
	}

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
		    
		    <label>Catagory</label>
		    <input name="catagory" class="form-control" placeholder="characters only" required>

		    <label>Tag</label>
		    <input name="tag" class="form-control" placeholder="characters only" required>

  			<button type="submit" class="btn btn-default">add</button>
		</form>  

	</div>
	<?php require '../views/partials/footer.php'; ?>