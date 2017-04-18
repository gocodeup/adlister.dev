<?php 

require '../db_connect.php';

$query = 'delete from ads';

$dbc->exec($query);

$ads =  [

	[
		'title'=>'Rubber Ducky', 
		'location'=>'San Antonio',
		'price'=>'10', 
		'description'=>'Rubber ducky with codeup logo',
		'username'=>'finn_the_human',
	]
];

$query = "INSERT INTO ads (title, location, price, description, username)
VALUES (:title, :location, :price, :description, :username)";
$statement = $dbc->prepare($query);
foreach ($ads as $ad) {
    $statement->bindValue(':title', $ad['title']);
    $statement->bindValue(':location', $ad['location']);
    $statement->bindValue(':price', $ad['price']);
    $statement->bindValue(':description', $ad['description']);
    $statement->bindValue(':username', $ad['username']);
    $statement->execute();
};