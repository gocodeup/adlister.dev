<?php  
$_ENV = require __DIR__ . '/../../env.php';
require __DIR__ . '/../db_connect.php';

//$query = 'DELETE IF EXISTS;';

$gavins = [
['name' => 'Kerbal Gavin', 'image' => 'uniqidstring', 'description' => 'Please be gentle.', 'price' => '420.00', 'user_id' => 1],
['name' => 'Corrupt Business Gavin', 'image' => '/img/uploads/phpcorruptgavin.jpg', 'description' => 'Best Gavin to use for all your corrupt business practices! Has no ethical or moral standards and still dresses great!', 'price' => '666.00', 'user_id' => 1],
['name' => 'Bark Gavin', 'image' => '/img/uploads/phpbarkgavin.png', 'description' => 'Check out the bark on this Gavin', 'price' => '10.00', 'user_id' => 2],
['name' => 'Patrick Gavin', 'image' => '/img/phpCowITn.png', 'description' => 'Please be gentle.', 'price' => '20.00', 'user_id' => 2],
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