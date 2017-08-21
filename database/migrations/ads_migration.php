<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    username VARCHAR(100) NOT NULL,
    date_posted DATE,
    category VARCHAR(240) NOT NULL,
    price FLOAT (12) NOT NULL,
    description VARCHAR(255) NOT NULL,
    availability_status VARCHAR(100) NOT NULL,
    pick_up_location VARCHAR(255)NOT NULL,
    location_city VARCHAR(255) NOT NULL,
    image blob NOT NULL,
    PRIMARY KEY (id)
)';

$connection->exec($query);
