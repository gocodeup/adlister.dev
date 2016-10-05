<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php'

$dbc->exec('DROP TABLE IF EXISTS listing');

$query = 'CREATE TABLE listing (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    item_name VARCHAR(240) NOT NULL,
    item_description VARCHAR(500) NOT NULL,
    item_price INT(100) NOT NULL,
    item_location_city VARCHAR(255) NOT NULL,
    item_location_state VARCHAR(2) NOT NULL,
 	PRIMARY KEY (id)
)';

$dbc->exec($query);
