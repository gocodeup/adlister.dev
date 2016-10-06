<?php

// $_ENV = require_once __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    date_listed DATE NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    price INT UNSIGNED NOT NULL,
    img_url TEXT NOT NULL,
    category VARCHAR(255) NOT NULL,
    tags VARCHAR(255),
    PRIMARY KEY (id)
)';

$dbc->exec($query);