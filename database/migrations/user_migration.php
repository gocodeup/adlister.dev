<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);