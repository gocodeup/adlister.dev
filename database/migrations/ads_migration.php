<?php 

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT,
    title VARCHAR(50) NOT NULL,
    price DOUBLE PRECISION(6,2) NOT NULL,
    image_url VARCHAR(255),
    description text NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);
