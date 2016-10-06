<?php
// This file will hold operations for formatting our tables. 
// We can create both tables simultaneously, rather than have seperate files  that cause the computer to overwork itself. 

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$query = 'DROP TABLE IF EXISTS listing, users';

$dbc->exec($query);

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);



$query = 'CREATE TABLE listing (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(240) NOT NULL,
    item_description VARCHAR(500) NOT NULL,
    item_price DECIMAL(65) NOT NULL,
    item_location_city VARCHAR(255) NOT NULL,
    item_location_state VARCHAR(2) NOT NULL,
    item_image TEXT NULL,
    user_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
 	PRIMARY KEY (id)
)';

$dbc->exec($query);