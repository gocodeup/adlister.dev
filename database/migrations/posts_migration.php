<?php

$_ENV = include __DIR__ . '/../../env.template.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS posts');

$query = 'CREATE TABLE posts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED,
    name VARCHAR(240) NOT NULL,
    image_url VARCHAR(240) NOT NULL,
    description TEXT,
    price DOUBLE NOT NULL,
    date_posted DATE NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id)
    	REFERENCES users(id)
    	ON DELETE CASCADE
)';

$dbc->exec($query);