<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');
$dbc->exec('DROP TABLE IF EXISTS users');
$dbc->exec('DROP TABLE IF EXISTS favorites');

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)';

$ads = 'CREATE TABLE IF NOT EXISTS ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    description VARCHAR (1000) NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    image VARCHAR (255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
)';

$favorites = 'CREATE TABLE IF NOT EXISTS favorites (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_id INT UNSIGNED NOT NULL,
    ad_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES users(id),
    FOREIGN KEY (ad_id) REFERENCES ads(id)
)';


$dbc->exec($query);
$dbc->exec($ads);
$dbc->exec($favorites);