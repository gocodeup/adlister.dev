<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(240) NOT NULL,
    location VARCHAR(240) NOT NULL,
    price DOUBLE(12, 2) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    user_id INT(10) NOT NULL,
    image VARCHAR(240) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);