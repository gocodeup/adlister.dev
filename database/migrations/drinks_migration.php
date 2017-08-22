<?php

$_ENV = include __DIR__ . '/../env.php';
require_once '../db_connect.php';

$connection->exec('DROP TABLE IF EXISTS drinks');

$query = 'CREATE TABLE drinks (
   	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL,
    name VARCHAR(240) NOT NULL,
    sub_category VARCHAR(240) NOT NULL,
    PRIMARY KEY (id)
)';

$connection->exec($query);
