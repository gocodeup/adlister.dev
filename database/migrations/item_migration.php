<?php
$_ENV = include __DIR__ . '/../../env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS items');

$query = 'CREATE TABLE items (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    price INT(10) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    keywords VARCHAR(200) NOT NULL,
    date_added DATE NOT NULL,
    username VARCHAR(100) NOT NULL, 
    img_url VARCHAR(100) NOT NULL,
    featured TINYINT(1) NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);