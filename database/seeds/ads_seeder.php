<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE ads");

$statement = "INSERT INTO ads (user_id, username, date_posted, product_name, category, sub_category, price, description, availability_status, pick_up_location, location_city, location_state, date_sold, contact_info, image) VALUES (:user_id, :username, :date_posted, :product_name, :category, :sub_category, :price, description, :availability_status, :pick_up_location, :location_city, :location_state, :date_sold, :contact_info, :image)";

$preparedStatement = $connection->prepare($statement);

echo "values added".PHP_EOL;