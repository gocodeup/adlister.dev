<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS shoes');

$query = "CREATE TABLE shoes (
    shoe_id INT UNSIGNED AUTO_INCREMENT,
    title VARCHAR(240) DEFAULT 'UNKNOWN',
    price DECIMAL(4,2) NOT NULL,
    msrp DECIMAL(4,2) NOT NULL,
    color VARCHAR(255) DEFAULT 'UNKNOWN',
    style VARCHAR(240) DEFAULT 'UNKNOWN',
    size FLOAT NOT NULL,
    location VARCHAR(240) DEFAULT 'UNKNOWN',
    category VARCHAR(240) DEFAULT 'UNKNOWN',
    brand VARCHAR(240) DEFAULT 'UNKNOWN',
    shoe_condition VARCHAR(240) DEFAULT 'UNKNOWN',
    contact_name VARCHAR(240) DEFAULT 'UNKNOWN',
    contact_number VARCHAR(240) NOT NULL,
    image_location VARCHAR(240) DEFAULT 'UNKNOWN',
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (shoe_id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)";

$dbc->exec($query);