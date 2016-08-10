<?php

$_ENV = include __DIR__ . '/../../env.php';
require_once __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    image VARCHAR(240) NOT NULL,
    description VARCHAR(255) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id),
)';

$dbc->exec($query);