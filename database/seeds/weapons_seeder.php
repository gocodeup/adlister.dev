<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE weapons");

$statement = "INSERT INTO weapons (user_id, name, sub_category) VALUES 
('1', 'Kingslayer', 'Sword'),
('2', 'Heartpiercer', 'Spear'),
('3', 'Kylrugh\'r', 'Mace'),
('4', 'Old Claymore', 'Sword'),
('2', 'Rogue\'s Delight', 'Dagger'),
('1', 'Elderwood Bow', 'Bow'),
('5', 'Dragonbreath', 'Cannon'),
('2', 'Soul Harvest', 'Mace')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;