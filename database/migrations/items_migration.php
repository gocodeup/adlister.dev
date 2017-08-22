<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item VARCHAR(240) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    quantity VARCHAR(240) NOT NULL,
    cost VARCHAR(100) NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);