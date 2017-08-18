<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec("TRUNCATE livestock");

$statement = "INSERT INTO livestock (user_id, name, date_posted, sub_category, price, description, availability) VALUES (:user_id, :name, :date_posted, :sub_category, :price, description, :availability)";

$preparedStatement = $connection->prepare($statement);

echo "values added".PHP_EOL;