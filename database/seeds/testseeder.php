<?php  
$_ENV = require __DIR__ . '/../../env.php';
require __DIR__ . '/../db_connect.php';

//$query = 'DELETE IF EXISTS;';

$Gavins = [
['id' => 1, 'name' => 'Kerbal Gavin', 'image' => 'uniqidstring', 'description' => 'Please be gentle.', 'price' => '420.00', 'user_id' => 1]
];

$stmt = $dbc->prepare
('INSERT INTO items (id, name, image, description, price, user_id) VALUES (:id, :name, :image, :description, :price, :user_id);');

foreach ($Gavins as $Gavin) {
	$stmt ->bindValue(':id',$Gavin['id'], PDO::PARAM_INT);
	$stmt ->bindValue(':name',$Gavin['name'], PDO::PARAM_STR);
	$stmt ->bindValue(':image',$Gavin['image'], PDO::PARAM_STR);
	$stmt ->bindValue(':description',$Gavin['description'], PDO::PARAM_STR);
	$stmt ->bindValue(':price',$Gavin['price'], PDO::PARAM_STR);
	$stmt ->bindValue(':user_id',$Gavin['user_id'], PDO::PARAM_INT);
}

$stmt->execute();
?>