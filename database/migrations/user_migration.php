<?php

$_ENV = include '../../env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = "
CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)";

// $dbc->exec('DROP TABLE IF EXISTS posts');

$dbc->exec($query);