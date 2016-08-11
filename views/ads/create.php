<!--Page for creating new advertisement listings-->
<?php 
 require_once __DIR__ . '/../../misc/tagsclass.php';
$tag = Tag::searchTag();
print_r($tag->fetch(PDO::FETCH_ASSOC));

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form input type = "text" name = "Insert your Gavin here.">
	</form>
	<div id = "display">
	</div>


</body>
</html>