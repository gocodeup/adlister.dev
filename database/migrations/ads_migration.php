<?php
$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';
$dbc->exec('DROP TABLE IF EXISTS ads');
$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price VARCHAR(100) NOT NULL,
    img_url VARCHAR(255) NOT NULL,
    category VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id)  REFERENCES users (id)
)';
$dbc->exec($query);