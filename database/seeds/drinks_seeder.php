<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE drinks");

$statement = "INSERT INTO drinks (user_id, name, sub_category) VALUES 
('2', 'Oat Mead', 'Mead'),
('5', 'Absinthe', 'Wine'),
('5', 'Hemlock For The Weary', 'Ale'),
('3', 'Ye Olde Malt', 'Beer'),
('4', 'Athlete\s Boot (NOT THE CONDITION)', 'Wine'),
('1', 'Venom', 'Mead'),
('1', 'Hopped', 'Beer'),
('4', 'Serf Brew', 'Ale')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;