<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE ads");

$statement = "INSERT INTO ads (user_id, username, date_posted, category, price, description, availability_status, pick_up_location, location_city, image) VALUES 
('1', 'username', '1994-12-10', 'category', 32 , 'description', 'availability_status', 'pick_up_location', 'location_city', 'image'),
('2', 'username', '1994-12-10', 'category', 46 , 'description', 'availability_status', 'pick_up_location', 'location_city', 'image'),
('3', 'username', '1994-12-10', 'category', 666 , 'description', 'availability_status', 'pick_up_location', 'location_city', 'image')" ;

$connection->exec($statement);

echo "values added".PHP_EOL;