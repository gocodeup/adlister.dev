<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE drinks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(240) NOT NULL,
    date_posted DATE NOT NULL,
    type_of_drink VARCHAR(240) NOT NULL,
    price FLOAT NOT NULL,
    description TEXT NOT NULL,
    purchase_status VARCHAR(240) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);