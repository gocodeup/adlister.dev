<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS shoes');

$query = 'CREATE TABLE shoes (
    shoe_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(240) NOT NULL,
    price VARCHAR(240) NOT NULL,
    msrp VARCHAR(100) NOT NULL,
    color VARCHAR(255) NOT NULL,
    style VARCHAR(240) NOT NULL,
    size VARCHAR(240) NOT NULL,
    location VARCHAR(240) NOT NULL,
    brand VARCHAR(240) NOT NULL,
    shoe_condition VARCHAR(240) NOT NULL,
    contact_name VARCHAR(240) NOT NULL,
    contact_number VARCHAR(240) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (shoe_id),
    FOREIGN KEY (user_id) REFERENCES users (id)
)';

$dbc->exec($query);