<?php
$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';
$dbc->exec('DROP TABLE IF EXISTS ads');
$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price VARCHAR(100) NOT NULL,
    img_url VARCHAR(255),
    category VARCHAR(255),
    PRIMARY KEY (id)
)';
$dbc->exec($query);