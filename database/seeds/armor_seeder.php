<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE armor");

$statement = "INSERT INTO armor (user_id, name, sub_category) VALUES 
('1', 'Mythril Mail', 'Chainmail'),
('1', 'Son Killed in War, Armor for Sale', 'Plate Armor'),
('3', 'Too Big For My Head', 'Head Armor'),
('5', 'Custom-Made Gauntlets', 'Gauntlets'),
('2', 'Athlete\'s Boot (NOT THE WINE)', 'Boots'),
('4', 'King\'s Crested Shield', 'Shield'),
('3', 'Baby Shoes, Never Worn', 'Boots'),
('3', 'Steel Helmet', 'Head Armor'),
('5', 'Hate Mail', 'Chainmail')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;