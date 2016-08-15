<?php  
$_ENV = require __DIR__ . '/../../env.php';
require __DIR__ . '/../db_connect.php';

//$query = 'DELETE IF EXISTS;';

$gavins = [
['name' => 'Emperor Gavin', 'image' => '/img/uploads/phpLcOUrP.jpg', 'description' => 'FOR THA EMP-ER-ER.', 'price' => '420.00', 'user_id' => 1]
];

$stmt = $dbc->prepare
('INSERT INTO items (name, image, description, price, user_id) VALUES (:name, :image, :description, :price, :user_id)');

foreach ($gavins as $gavin) {
	$stmt->bindValue(':name',$gavin['name'], PDO::PARAM_STR);
	$stmt->bindValue(':image',$gavin['image'], PDO::PARAM_STR);
	$stmt->bindValue(':description',$gavin['description'], PDO::PARAM_STR);
	$stmt->bindValue(':price',$gavin['price'], PDO::PARAM_STR);
	$stmt->bindValue(':user_id',$gavin['user_id'], PDO::PARAM_INT);

	$stmt->execute();
};
?>