<?php
​
$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';
​
$dbc->exec('DROP TABLE IF EXISTS ads');
​
$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL 
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id)  REFERENCES users (id)
    
)';
​
$dbc->exec($query);