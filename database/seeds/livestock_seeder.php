<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE livestock");

$statement = "INSERT INTO livestock (user_id, name, sub_category) VALUES 
('2', 'Abel', 'Sheep'),
('1', 'Olde Boy', 'Horse'),
('1', 'Dozen of Chicks', 'Chicken'),
('2', 'Food Goblin', 'Pig'),
('4', 'Buck', 'Horse')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;