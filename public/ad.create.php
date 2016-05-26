<?php 
require_once __DIR__ . '/../database/db_connect.php';
require_once '../utils/Input.php';
require_once '../utils/helper_functions.php';

function pageController($dbc)
{

 	if (!empty($_POST)){

 		$user_id = 1;

 		$date_listed = '2015-04-04';

		$title = Input::getString('title');

		$description = Input::getString('description');

		$price = Input::getNumber('price');

		$img_url = Input::getString('img_url');

		$category = Input::getString('category');

		$tags = Input::getString('tags');

		$stmt = $dbc->prepare('INSERT INTO ads (user_id, date_listed, title, description, price, img_url, category, tags) VALUES (:user_id, :date_listed, :title, :description, :price, :img_url, :category, :tags)');

		$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		$stmt->bindValue(':date_listed', $date_listed, PDO::PARAM_INT);
	    $stmt->bindValue(':title', $title, PDO::PARAM_STR);
	    $stmt->bindValue(':description', $description,  PDO::PARAM_STR);
	    $stmt->bindValue(':price', $price,  PDO::PARAM_INT);
	    $stmt->bindValue(':img_url', $img_url,  PDO::PARAM_STR);
	    $stmt->bindValue(':category', $category,  PDO::PARAM_STR);
	    $stmt->bindValue(':tags', $tags,  PDO::PARAM_STR);


	    $stmt->execute();
	    $_POST = [];
	}

} 

pageController($dbc);

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
		    
		    <label>Category</label>
		    <input name="category" class="form-control" placeholder="characters only" required>

		    <label>Tags</label>
		    <input name="tags" class="form-control" placeholder="characters only" required>

  			<button type="submit" class="btn btn-default">add</button>
		</form>  

	</div>
	<?php require '../views/partials/footer.php'; ?>