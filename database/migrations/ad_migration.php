<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    category VARCHAR(100) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT NOT NULL,
    photodir VARCHAR(240),
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
)';

$dbc->exec($query);
