<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE torture");


$statement = "INSERT INTO torture (user_id, name, sub_category) VALUES 
('4', 'Dream Gal', 'Iron Maiden'),
('2', 'Eat Cake', 'Guillotine'),
('5', 'S&M', 'Shame Mask'),
('5', 'Flogger\'s Friend', 'Pillory'),
('2', 'Simple Shackles', 'Chains'),
('3', 'Mommy Issues', 'Iron Maiden'),
('1', 'Out To Dry', 'Rack'),
('2', 'Old But Still Good', 'Chains')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;