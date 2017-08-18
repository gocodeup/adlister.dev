<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once __DIR__ . '/../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS user');

$query = 'CREATE TABLE user (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);