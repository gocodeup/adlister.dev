<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = "CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    price FLOAT UNSIGNED NOT NULL,
    image_url VARCHAR(255) NOT NULL DEFAULT 'http://placehold.it/500x300',
    name VARCHAR(240) NOT NULL,
    description TEXT NOT NULL,
    PRIMARY KEY (id)
)";

$dbc->exec($query);