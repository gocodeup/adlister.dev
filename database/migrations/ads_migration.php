<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection>exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    username VARCHAR(100) NOT NULL,
    date_posted DATE,
    product_name VARCHAR(240) NOT NULL,
    category VARCHAR(240) NOT NULL,
    sub_category VARCHAR(100) NOT NULL,
    price FLOAT (12) NOT NULL,
    description VARCHAR(255) NOT NULL,
    availability VARCHAR(100) NOT NULL,
    pick_up_location VARCHAR(255)NOT NULL,
    location_city VARCHAR(255) NOT NULL,
    location_state VARCHAR(255) NOT NULL,
    date_sold DATE,
    contact VARCHAR(255) NOT NULL,
    image blob NOT NULL,
    PRIMARY KEY (id)
)';

$connection->exec($query);
