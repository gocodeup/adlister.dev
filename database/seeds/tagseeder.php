<?php  
$_ENV = require_once __DIR__ . '/../../env.php';
require __DIR__ . '/../db_connect.php';

$tags = [
['id' => 3, 'name' => 'Fantasy']
];

$stmt = $dbc->prepare
('INSERT INTO tags (id, name) VALUES (:id, :name);');

foreach ($tags as $tag) {
	$stmt ->bindValue(':id',$tag['id'], PDO::PARAM_INT);
	$stmt ->bindValue(':name',$tag['name'], PDO::PARAM_STR);
}
$stmt->execute();
?>