<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    description TEXT,
	seller_id INT UNSIGNED,
    image VARCHAR(240),
    PRIMARY KEY (id)
)';

$dbc->exec($query);

 ?>
