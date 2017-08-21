<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE tools");

$statement = "INSERT INTO tools (user_id, name, sub_category) VALUES 
('5', 'Ye Olde Hoe', 'Hoe'),
('1', 'Scythe LIKE NEW', 'Scythe'),
('2', 'For sheep and stubborn beards', 'Shears')";

$connection->exec($statement);

echo "values added".PHP_EOL;